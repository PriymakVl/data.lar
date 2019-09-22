<?php

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

Route::get('/', ['as' => 'home', 'uses' => 'MainController@index']);

Route::get('/books', ['as' => 'books', 'uses' => 'BookController@books']);
Route::get('/book/{id}', ['as' => 'book', 'uses' => 'BookController@index']);

Route::get('/authors', ['as' => 'authors', 'uses' => 'AuthorController@authors']);
Route::get('/author/{id}', ['as' => 'author', 'uses' => 'AuthorController@index']);
Route::get('/author/delete/{id}', ['as' => 'author_delete', 'uses' => 'AuthorController@delete']);

