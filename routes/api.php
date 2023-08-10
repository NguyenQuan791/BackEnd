<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\SoundController;
use App\Http\Controllers\Api\ContentController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('page', [PageController::class, 'index']);
Route::post('page', [PageController::class, 'store']);
Route::get('page/{id}', [PageController::class, 'show']);
Route::match(['put', 'patch'], 'page/{id}', [PageController::class, 'update']);
Route::delete('page/{id}', [PageController::class, 'destroy']);

Route::get('sound', [SoundController::class, 'index']);
Route::post('sound', [SoundController::class, 'store']);
Route::get('sound/{id}', [SoundController::class, 'show']);
Route::match(['put', 'patch'], 'sound/{id}', [SoundController::class, 'update']);
Route::delete('sound/{id}', [SoundController::class, 'destroy']);

Route::get('content', [ContentController::class, 'index']);
Route::post('content', [ContentController::class, 'store']);
Route::get('content/{id}', [ContentController::class, 'show']);
Route::match(['put', 'patch'], 'content/{id}', [ContentController::class, 'update']);
Route::delete('content/{id}', [ContentController::class, 'destroy']);