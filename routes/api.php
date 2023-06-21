<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Books;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/author/find', 'AuthorsController@find')->name('author.find');
Route::resource('/author', 'AuthorsController')->only(['show', 'store', 'update', 'destroy']);
Route::resource('/book', 'BooksController')->only(['show', 'store', 'update', 'destroy']);
Route::get('books', 'ApiController@getAllBooks');
Route::get('books/{id}', function($id) {
    return Books::find($id);
});
Route::post('books', 'ApiController@createBook');
Route::put('books/{id}', 'ApiController@updateBook');
Route::delete('books/{id}','ApiController@deleteBook');