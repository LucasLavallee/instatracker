<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetAccessTokenApiController extends Controller
{
    public function getAccessToken(Request $request): JsonResponse
    {
        // Get the Basic auth identifiers to make sure that they fit with an existing user
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (!$credentials['email'] || !$credentials['password']) {
            return response()->json(['error' => 'Unauthorized.'], 401);
        }

        $authAttempt = Auth::attempt($credentials);

        if (!$authAttempt) {
            return response()->json(['error' => 'Unauthorized.'], 401);
        }

        $relatedUser = User::where('email', $credentials['email'])->firstOrFail();

        // Create and assign Bearer token to related user
        $token = $relatedUser->createToken(uniqid());

        return response()->json([
            'token' => $token->plainTextToken,
        ]);
    }
}
