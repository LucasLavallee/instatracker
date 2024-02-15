<?php

namespace App\Repositories;

use App\Models\InstagramUser;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Crypt;

class InstagramUserRepository
{
    public function getInstagramUser(int $instagramUserId): ?InstagramUser
    {
        return InstagramUser::select('id', 'username', 'last_posts_update')
            ->withCount('posts')
            ->where('id', $instagramUserId)
            ->first();
    }

    public function getInstagramUsers(int $page = 1): LengthAwarePaginator
    {
        return InstagramUser::select('id', 'username', 'last_posts_update')
            ->withCount('posts')
            ->orderBy('username', 'ASC')
            ->paginate(5, ['*'], 'page', $page);
    }

    public function createInstagramUser(array $userData): void
    {
        InstagramUser::firstOrCreate([
            'instagram_user_id' => $userData['id'],
        ], [
            'username' => $userData['username'],
            'access_token' => Crypt::encryptString($userData['access_token']),
        ]);
    }
}
