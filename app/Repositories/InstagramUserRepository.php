<?php

namespace App\Repositories;

use App\Models\InstagramUser;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Crypt;

class InstagramUserRepository
{
    public function getInstagramUsers(int $page = 1): LengthAwarePaginator
    {
        return InstagramUser::orderBy('username', 'ASC')->paginate(10, ['*'], 'page', $page);
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
