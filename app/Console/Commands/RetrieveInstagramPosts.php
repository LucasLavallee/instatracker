<?php

namespace App\Console\Commands;

use App\Exceptions\InstagramApiException;
use App\Models\InstagramUser;
use App\Repositories\PostRepository;
use App\Services\InstagramService;
use Carbon\Carbon;
use Illuminate\Console\Command;

class RetrieveInstagramPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:retrieve-instagram-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieve Instagram Posts';

    public function __construct(private PostRepository $postRepository, private InstagramService $instagramService)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @throws InstagramApiException
     */
    public function handle(): void
    {
        $instagramUsers = InstagramUser::all();

        foreach ($instagramUsers as $instagramUser) {
            $userPosts = $this->instagramService->getUserPosts($instagramUser);

            $postWithChildrens = [];
            // To make sur to get all details, we must make additionnal calls for CAROUSEL_ALBUM media type
            foreach ($userPosts as $userPost) {
                if ($userPost['media_type'] === 'CAROUSEL_ALBUM') {
                    $userPost['children'] = $this->instagramService->getPostChildrens($userPost['id']);
                }
                $postWithChildrens[] = $userPost;
            }

            // Create / update posts
            foreach ($postWithChildrens as $userPost) {
                $this->postRepository->createOrUpdatePost($userPost, $instagramUser);
            }

            $instagramUser->last_posts_update = Carbon::now();
            $instagramUser->save();
        }
    }
}
