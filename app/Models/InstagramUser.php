<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InstagramUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'instagram_user_id',
        'username',
        'access_token',
        'token_expiration_date',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'last_posts_update' => 'datetime',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class)->whereNull('parent_id');
    }
}
