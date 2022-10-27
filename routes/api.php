<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserControllerAPI;
use App\Http\Controllers\api\PodcastControllerAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/signin', [UserControllerAPI::class, 'signin']);
Route::post('/login', [UserControllerAPI::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/allPodcasts', [PodcastControllerAPI::class, 'getAll']);
    Route::post('/logout', [UserControllerAPI::class, 'logout']);
});