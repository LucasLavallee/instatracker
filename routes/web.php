<?php

use App\Http\Controllers\InstagramController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware([
    'web',
])->group(function (): void {
    Route::get('/oauth', [InstagramController::class, 'authenticate']);

    Route::get('/{any}', function () {
        return view('index');
    })->where('any', '.*');

    //    Route::get('/instagram-users', [InstagramUserController::class, 'index']);

    // Not found
    //    Route::get('/{pathMatch}', function () {
    //        return view('index');
    //    })->where('pathMatch', '.*');
});
