<?php

namespace App\Http\Resources;

use App\Models\InstagramUser;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin InstagramUser */
class InstagramUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'lastPostsUpdate' => $this->last_posts_update,
            'totalPosts' => $this->posts_count,
        ];
    }
}
