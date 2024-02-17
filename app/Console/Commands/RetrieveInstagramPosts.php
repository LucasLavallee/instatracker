<?php

namespace App\Console\Commands;

use App\Exceptions\InstagramApiException;
use App\Models\InstagramUser;
use App\Services\InstagramService;
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

    public function __construct(private InstagramService $instagramService)
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

        $this->instagramService->getInstagramUsersPosts($instagramUsers);
    }
}
