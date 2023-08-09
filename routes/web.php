<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
Route::get('',function(){
    return view('welcome');
});

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


