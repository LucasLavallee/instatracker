<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstagramUserResource;
use App\Http\Resources\PostResource;
use App\Repositories\InstagramUserRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class InstagramUserController extends Controller
{
    public function __construct(private InstagramUserRepository $instagramUserRepository, private PostRepository $postRepository)
    {
    }

    public function index(Request $request): JsonResponse
    {
        // Get posts in the given pagination page
        /** @var int $page */
        $page = $request->page ? $request->page : 1;
        $usersPaginator = $this->instagramUserRepository->getInstagramUsers($page);

        return response()->json([
            'message' => 'success',
            'pagination' => [
                'total' => $usersPaginator->total(),
                'lastPage' => $usersPaginator->lastPage(),
                'currentPage' => $page,
                'next' => $usersPaginator->nextPageUrl(),
                'previous' => $usersPaginator->previousPageUrl(),
            ],
            'instagramUsers' => InstagramUserResource::collection($usersPaginator->items()),
        ]);
    }

    public function show(int $instagramUserId): JsonResponse
    {
        $instagramUser = $this->instagramUserRepository->getInstagramUser($instagramUserId);

        return Response::json([
            'message' => $instagramUser ? 'success' : 'not found',
            'instagramUser' => $instagramUser ? InstagramUserResource::make($instagramUser) : null,
        ], $instagramUser ? 200 : 401);
    }

    public function showPosts(Request $request, string $instagramUserId): JsonResponse
    {
        // Get posts in the given pagination page
        /** @var int $page */
        $page = $request->page ? $request->page : 1;
        $postsPaginator = $this->postRepository->getInstagramUserPosts($instagramUserId, $page);

        return response()->json([
            'message' => 'success',
            'pagination' => [
                'lastPage' => $postsPaginator->lastPage(),
                'currentPage' => $page,
                'total' => $postsPaginator->total(),
                'next' => $postsPaginator->nextPageUrl(),
                'previous' => $postsPaginator->previousPageUrl(),
            ],
            'posts' => PostResource::collection($postsPaginator->items()),
        ]);
    }
}
