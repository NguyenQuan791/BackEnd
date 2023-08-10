<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get('content', [ContentController::class, 'index']);
Route::post('content', [ContentController::class, 'store']);
Route::get('content/{id}', [ContentController::class, 'show']);
Route::match(['put', 'patch'], 'content/{id}', [ContentController::class, 'update']);
Route::delete('content/{id}', [ContentController::class, 'destroy']);