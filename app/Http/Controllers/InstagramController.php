<?php

namespace App\Http\Controllers;

use App\Exceptions\InstagramApiException;
use App\Repositories\InstagramUserRepository;
use App\Services\InstagramService;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InstagramController extends Controller
{
    public function __construct(private InstagramService $instagramService, private InstagramUserRepository $instagramUserRepository)
    {
    }

    public function authenticate(Request $request): RedirectResponse
    {
        /** @var string|null $code */
        $code = $request->code;

        if (!$code) {
            throw new InstagramApiException('[Instagram] Code not found on Instagram OAuth redirection.');
        }

        // First we want to get the short Lived access token using the given code
        $shortLivedAccessToken = $this->instagramService->getInstagramAccessTokenFromCode($code);

        // Then we want to get a long lived access token using access token
        $longLivedAccessTokenDetails = $this->instagramService->getInstagramLongLivedAccessToken($shortLivedAccessToken);
        $tokenExpirationDate = Carbon::now()->addSeconds($longLivedAccessTokenDetails['expires_in']);

        // Then we want to create a new InstagramUser for the given long lived access token
        $userData = $this->instagramService->getInstagramUserDetails($longLivedAccessTokenDetails['access_token']);
        $instagramUser = $this->instagramUserRepository->createInstagramUser($userData, $longLivedAccessTokenDetails['access_token'], $tokenExpirationDate);

        Log::info('A new instagram user has been created from OAuth process: ' . $userData['username']);

        // Here we can retrieve the posts for the newly create user
        $this->instagramService->getInstagramUsersPosts(collect([$instagramUser]));

        return redirect('/');
    }
}
