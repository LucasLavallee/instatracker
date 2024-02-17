<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Repositories\InstagramUserRepository;
use App\Services\InstagramService;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InstagramUserSeeder extends Seeder
{
    public function __construct(private InstagramService $instagramService, private InstagramUserRepository $instagramUserRepository)
    {
    }

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Only on local
        // For test purpose, we can retrieve data from the instagram user related to the config('instagram.access_token') token
        if (config('instagram.access_token')) {
            // First we want to refresh the test token to get the token expiration date
            $refreshedAccessTokenDetails = $this->instagramService->refreshAccessToken(config('instagram.access_token'));
            $tokenExpirationDate = Carbon::now()->addSeconds($refreshedAccessTokenDetails['expires_in']);

            // Get token's user details
            $userData = $this->instagramService->getInstagramUserDetails($refreshedAccessTokenDetails['access_token']);

            // Create InstagramUser with given data
            $instagramUser = $this->instagramUserRepository->createInstagramUser($userData, $refreshedAccessTokenDetails['access_token'], $tokenExpirationDate);

            // Load InstagramUser posts from API
            $this->instagramService->getInstagramUsersPosts(collect([$instagramUser]));
        }
    }
}
