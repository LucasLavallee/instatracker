<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'instagram_post_id',
        'media_url',
        'caption',
        'media_type',
        'permalink',
        'timestamp',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
