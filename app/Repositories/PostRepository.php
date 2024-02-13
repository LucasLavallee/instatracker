<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Carbon;

class PostRepository
{
    public function createOrUpdatePost(array $postData, ?Post $parent = null): void
    {
        $post = Post::firstOrCreate([
            'instagram_post_id' => $postData['id'],
        ], [
            'media_url' => $postData['media_url'],
            'caption' => $postData['caption'] ?? null,
            'media_type' => $postData['media_type'],
            'permalink' => $postData['permalink'],
            'timestamp' => Carbon::make($postData['timestamp']),
        ]);

        // Attach parent if it exists
        if ($parent) {
            $post->parent()->associate($parent)->save();
        }

        // Make sure to create childrens if they exists
        if (isset($postData['children'])) {
            foreach ($postData['children'] as $children) {
                $this->createOrUpdatePost($children, $post);
            }
        }
    }
}
