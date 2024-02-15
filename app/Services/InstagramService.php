<?php

namespace App\Services;

use App\Exceptions\InstagramApiException;
use App\Models\InstagramUser;
use Illuminate\Support\Facades\Http;
use Safe\Exceptions\JsonException;
use function Safe\json_decode;

class InstagramService
{
    public const string INSTAGRAM_OAUTH_URL = 'https://api.instagram.com';
    public const string INSTAGRAM_CONTENT_URL = 'https://graph.instagram.com';

    public function getInstagramUserDetails(string $longLiveToken): array
    {
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
        $fieldsToCheck = ['id', 'media_url', 'caption', 'media_type', 'permalink', 'thumbnail_url', 'timestamp', 'username', 'children'];

        $response = Http::get(self::INSTAGRAM_CONTENT_URL . '/' . $instagramUser->instagram_user_id . '/media', [
            'fields' => implode(',', $fieldsToCheck),
            'access_token' => config('instagram.access_token'),
        ]);

        if (!$response->successful()) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to retrieve instagram medias.');
        }

        $body = json_decode($response->body(), true);

        if (!is_array($body)) {
            throw new InstagramApiException('[Instagram] Something bad happened when trying to retrieve childrens details. Array required.');
        }

        // Here, for test purpose, we retrieve only 10 posts from the API
        return isset($body['data']) ? array_slice($body['data'], 0, 10) : [];
    }

    /**
     * @throws InstagramApiException
     * @throws JsonException
     */
    public function getPostChildrens(string $postId): array
    {
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
}
