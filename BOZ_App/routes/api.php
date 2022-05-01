<?php

use App\Http\Controllers\Api\MediaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('media/add',[MediaController::class,'storeMedia'])->name('media-add');
Route::post('media/remove',[MediaController::class,'deleteMedia'])->name('media-remove');

Route::get('media/videos',[MediaController::class,'getAllVideos']);
Route::get('media/images',[MediaController::class,'getAllImages']);
Route::get('media/audios',[MediaController::class,'getAllAudios']);
