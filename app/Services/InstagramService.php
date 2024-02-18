<?php

namespace App\Services;

use App\Exceptions\InstagramApiException;
use App\Models\InstagramUser;
use App\Repositories\PostRepository;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Safe\Exceptions\JsonException;
use function Safe\json_decode;

class InstagramService
{
    public const string INSTAGRAM_OAUTH_URL = 'https://api.instagram.com';
    public const string INSTAGRAM_CONTENT_URL = 'https://graph.instagram.com';

    public function __construct(private PostRepository $postRepository)
    {
    }

    public function getInstagramAccessTokenFromCode(string $code): string
    {
        // https://developers.facebook.com/docs/instagram-basic-display-api/guides/getting-access-tokens-and-permissions
        $response = Http::asMultipart()->post(self::INSTAGRAM_OAUTH_URL . '/oauth/access_token', [
            'client_id' => (string) config('instagram.client_id'), // @phpstan-ignore-line
            'client_secret' => (string) config('instagram.client_secret'), // @phpstan-ignore-line
            'grant_type' => 'authorization_code',
            'redirect_uri' => config('app.url') . '/auth/',
            'code' => $code,
        ]);

        if (!$response->successful()) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to get access token using code.');
        }

        $body = json_decode($response->body(), true);

        if (!is_array($body)) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to get access token using code. Array required.');
        }

        return $body['access_token'];
    }

    public function getInstagramLongLivedAccessToken(string $shortLivedAccessToken): array
    {
        // https://developers.facebook.com/docs/instagram-basic-display-api/overview#instagram-user-access-tokens
        $response = Http::get(self::INSTAGRAM_CONTENT_URL . '/access_token', [
            'grant_type' => 'ig_exchange_token',
            'client_secret' => config('instagram.client_secret'),
            'access_token' => $shortLivedAccessToken,
        ]);

        if (!$response->successful()) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to get long lived access token using access token.');
        }

        $body = json_decode($response->body(), true);

        if (!is_array($body)) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to get long lived access token using access token. Array required.');
        }

        return $body;
    }

    public function getInstagramUserDetails(string $longLiveToken): array
    {
        // https://developers.facebook.com/docs/instagram-basic-display-api/reference/me
        $fieldsToCheck = ['id', 'username'];

        $response = Http::get(self::INSTAGRAM_CONTENT_URL . '/me', [
            'fields' => implode(',', $fieldsToCheck),
            'access_token' => config('instagram.access_token'),
        ]);

        if (!$response->successful()) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to retrieve instagram user details.');
        }

        $body = json_decode($response->body(), true);

        if (!is_array($body)) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to retrieve instagram user details. Array required.');
        }

        $body['access_token'] = $longLiveToken;

        return $body;
    }

    /**
     * @throws InstagramApiException
     * @throws JsonException
     */
    public function getUserPosts(InstagramUser $instagramUser): array
    {
        // https://developers.facebook.com/docs/instagram-basic-display-api/reference/user/media#reading
        $fieldsToCheck = ['id', 'media_url', 'caption', 'media_type', 'permalink', 'thumbnail_url', 'timestamp', 'username', 'children'];

        $response = Http::get(self::INSTAGRAM_CONTENT_URL . '/' . $instagramUser->instagram_user_id . '/media', [
            'fields' => implode(',', $fieldsToCheck),
            'access_token' => Crypt::decryptString($instagramUser->access_token),
        ]);

        if (!$response->successful()) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to retrieve instagram medias.');
        }

        $body = json_decode($response->body(), true);

        if (!is_array($body)) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to retrieve childrens details. Array required.');
        }

        // Here, for test purpose, we retrieve only 20 posts from the API
        return isset($body['data']) ? array_slice($body['data'], 0, 20) : [];
    }

    /**
     * @throws InstagramApiException
     * @throws JsonException
     */
    public function getPostChildrens(string $postId): array
    {
        // https://developers.facebook.com/docs/instagram-basic-display-api/reference/media/children#reading
        $fieldsToCheck = ['id', 'media_url', 'media_type', 'permalink', 'thumbnail_url', 'timestamp', 'username', 'children'];

        $response = Http::get(self::INSTAGRAM_CONTENT_URL . "/{$postId}/children", [
            'fields' => implode(',', $fieldsToCheck),
            'access_token' => config('instagram.access_token'),
        ]);

        if (!$response->successful()) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to retrieve childrens details.');
        }

        $body = json_decode($response->body(), true);

        if (!is_array($body)) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to retrieve childrens details. Array required.');
        }

        return $body['data'] ?? [];
    }

    public function getInstagramUsersPosts(Collection $instagramUsers): void
    {
        /** @var InstagramUser $instagramUser */
        foreach ($instagramUsers as $instagramUser) {
            $userPosts = $this->getUserPosts($instagramUser);

            $postWithChildrens = [];
            // To make sur to get all details, we must make additionnal calls for CAROUSEL_ALBUM media type
            foreach ($userPosts as $userPost) {
                if ($userPost['media_type'] === 'CAROUSEL_ALBUM') {
                    $userPost['children'] = $this->getPostChildrens($userPost['id']);
                }
                $postWithChildrens[] = $userPost;
            }

            // Create / update posts
            foreach ($postWithChildrens as $userPost) {
                $this->postRepository->createOrUpdatePost($userPost, $instagramUser);
            }

            $instagramUser->last_posts_update = Carbon::now();
            $instagramUser->save();
        }
    }

    public function refreshAccessToken(string $longLivedAccessToken): array
    {
        // https://developers.facebook.com/docs/instagram-basic-display-api/guides/long-lived-access-tokens#get-a-long-lived-token
        $response = Http::get(self::INSTAGRAM_CONTENT_URL . '/refresh_access_token', [
            'grant_type' => 'ig_refresh_token',
            'access_token' => $longLivedAccessToken,
        ]);

        if (!$response->successful()) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to refresh long lived access token.');
        }

        $body = json_decode($response->body(), true);

        if (!is_array($body)) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to refresh long lived access token. Array required.');
        }

        return $body;
    }
}
