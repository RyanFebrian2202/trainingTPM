<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [BookController::class, 'getCreatePage'])->name('getCreatePage');
// nama url blh sama asal 2-2nya gk sejenis. jd kalo 1 get, 1 post urlnya sama yah gpp

Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');

Route::get('/get-book', [BookController::class, 'getBook'])->name('getBook');

Route::get('/update-book/{id}', [BookController::class, 'getBookById'])->name('getBookById');

Route::patch('/update-book/{id}' , [BookController::class, 'updateBook'])->name('updateBook');

Route::delete('/delete/{id}',[BookController::class, 'deleteBook'])->name('delete');

Route::get('/hello', function () {
    echo 'Hello World';
});