<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(private PostRepository $postRepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        // Get posts in the given pagination page
        /** @var int $page */
        $page = $request->page ? $request->page : 1;
        $postsPaginator = $this->postRepository->getPosts($page);

        return response()->json([
            'message' => 'success',
            'pagination' => [
                'total' => $postsPaginator->total(),
                'next' => $postsPaginator->nextPageUrl(),
                'previous' => $postsPaginator->previousPageUrl(),
            ],
            'posts' => PostResource::collection($postsPaginator->items()),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): JsonResponse
    {
        return response()->json([
            'message' => 'success',
            'posts' => PostResource::make($post),
        ]);
    }
}
