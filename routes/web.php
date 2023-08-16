<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
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
Route::get('',[BookController::class,'index']);

Route::resource('book',BookController::class);

Route::get('book/delete/{id}',[BookController::class,'destroy']);
Route::get('book/edit/{id}',[BookController::class,'edit']);

// Route::prefix('book')->group(function (){
//     Route::get('', [BookController::class,'index']);

//     Route::get('/edit/{id}', [BookController::class,'getItem']);

//     Route::post('/edit/{id}', [BookController::class,'updateItem']);

//     Route::get('/add', [BookController::class,'createItem']);

//     Route::post('/add', [BookController::class,'handleCreate']);

//     Route::delete('/delete/{id}', [BookController::class,'deleteItem']);
// });
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/book', [BookController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('',[BookController::class,'index']);
});

