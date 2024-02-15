<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Repositories\InstagramUserRepository;
use App\Services\InstagramService;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
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
            $userData = $this->instagramService->getInstagramUserDetails(config('instagram.access_token'));
            $instagramUser = $this->instagramUserRepository->createInstagramUser($userData);
            $this->instagramService->getInstagramUsersPosts(collect([$instagramUser]));
        }
    }
}
