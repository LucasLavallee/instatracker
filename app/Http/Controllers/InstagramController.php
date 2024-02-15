<?php

namespace App\Http\Controllers;

use App\Exceptions\InstagramApiException;
use App\Repositories\InstagramUserRepository;
use App\Services\InstagramService;
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

        // First we want to get the short Lived access token using the given code: https://developers.facebook.com/docs/instagram-basic-display-api/guides/long-lived-access-tokens#get-a-long-lived-token
        $shortLivedAccessToken = $this->instagramService->getInstagramAccessTokenFromCode($code);

        // Then we want to get a long lived access token using access token: https://developers.facebook.com/docs/instagram-basic-display-api/overview#instagram-user-access-tokens
        $longLivedAccessToken = $this->instagramService->getInstagramLongLivedAccessToken($shortLivedAccessToken);

        // Then we want to create a new InstagramUser for the given long lived access token
        $userData = $this->instagramService->getInstagramUserDetails($longLivedAccessToken);
        $this->instagramUserRepository->createInstagramUser($userData);

        Log::info('A new instagram user has been created from OAuth process: ' . $userData['username']);

        return redirect('/');
    }
}
