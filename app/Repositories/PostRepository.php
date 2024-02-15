<?php

namespace App\Repositories;

use App\Models\InstagramUser;
use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;

class PostRepository
{
    public function getPosts(int $page = 1): LengthAwarePaginator
    {
        return Post::whereNull('parent_id')
            ->orderBy('timestamp', 'DESC')
            ->paginate(10, ['*'], 'page', $page);
    }

    public function createOrUpdatePost(array $postData, InstagramUser $instagramUser, ?Post $parent = null): void
    {
        $post = Post::firstOrNew([
            'instagram_post_id' => $postData['id'],
        ]);

        $post->media_url = $postData['media_url'];
        $post->caption = $postData['caption'] ?? null;
        $post->media_type = $postData['media_type'];
        $post->permalink = $postData['permalink'];
        $post->timestamp = $postData['timestamp'] ? Carbon::parse($postData['timestamp']) : Carbon::now();

        $post->save();

        // Attach parent if it exists
        if ($parent) {
            $post->parent()->associate($parent)->save();
        }

        // Attach to instagram user if new entry
        $post->instagramUser()->associate($instagramUser)->save();

        // Make sure to create childrens if they exists
        if (isset($postData['children'])) {
            foreach ($postData['children'] as $children) {
                $this->createOrUpdatePost($children, $instagramUser, $post);
            }
        }
    }
}
