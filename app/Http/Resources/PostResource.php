<?php

namespace App\Http\Resources;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Post */
class PostResource extends JsonResource
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
            'mediaType' => $this->media_type,
            'mediaUrl' => $this->media_url,
            'thumbnailUrl' => $this->thumbnail_url,
            'caption' => $this->caption,
            'permalink' => $this->permalink,
            'timestamp' => $this->timestamp,
            'children' => $this->children->isNotEmpty() ? PostResource::collection($this->children) : null,
        ];
    }
}
