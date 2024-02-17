<?php

use App\Http\Controllers\Api\GetAccessTokenApiController;
use App\Http\Controllers\Api\InstagramUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Here we could also implement Laravel Sanctum to limit API usage only to users with access tokens.
// We could add a Laravel Nova back office to manage API users and their access tokens
Route::middleware(['api'])->group(function () {
    Route::post('/access-token', [GetAccessTokenApiController::class, 'getAccessToken']);

    Route::middleware([
        'auth:sanctum',
    ])->group(function (): void {
        Route::get('/instagram-users', [InstagramUserController::class, 'index']);
        Route::get('/instagram-users/{instagramUserId}', [InstagramUserController::class, 'show']);
        Route::get('/instagram-users/{instagramUserId}/posts', [InstagramUserController::class, 'showPosts']);
    });

    // Didn't managed to make Sanctum SPA work so I've created specific routes without sanctum auth for front only for test purpose.
    Route::get('/front/instagram-users', [InstagramUserController::class, 'index']);
    Route::get('/front/instagram-users/{instagramUserId}', [InstagramUserController::class, 'show']);
    Route::get('/front/instagram-users/{instagramUserId}/posts', [InstagramUserController::class, 'showPosts']);
});
