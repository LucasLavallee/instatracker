<?php

namespace App\Repositories;

use App\Models\InstagramUser;
use Carbon\Carbon;
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

    public function createInstagramUser(array $userData, string $accessToken, Carbon $tokenExpirationDate): InstagramUser
    {
        return InstagramUser::firstOrCreate([
            'instagram_user_id' => $userData['id'],
        ], [
            'username' => $userData['username'],
            'access_token' => Crypt::encryptString($accessToken),
            'token_expiration_date' => $tokenExpirationDate,
        ]);
    }
}
