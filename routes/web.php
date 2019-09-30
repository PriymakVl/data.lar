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
Route::match(['get', 'post'], '/book/add', ['as' => 'book_add', 'uses' => 'BookController@add']);
Route::get('/book/{id}', ['as' => 'book', 'uses' => 'BookController@index']);

Route::get('/authors', ['as' => 'authors', 'uses' => 'AuthorController@authors']);
Route::match(['get', 'post'], '/author/add', ['as' => 'author_add', 'uses' => 'AuthorController@add']);
Route::get('/author/delete/{id}', ['as' => 'author_delete', 'uses' => 'AuthorController@delete']);
Route::match(['get', 'post'], '/author/edit/{id?}', ['as' => 'author_edit', 'uses' => 'AuthorController@edit']);
Route::get('/author/search', ['as' => 'author_search', 'uses' => 'AuthorController@search']);
Route::get('/author/{id}', ['as' => 'author', 'uses' => 'AuthorController@index']);

Route::get('/quotes', ['as' => 'quotes', 'uses' => 'QuoteController@quotes']);
Route::match(['get', 'post'], '/quote/add', ['as' => 'quote_add', 'uses' => 'QuoteController@add']);
Route::get('/quote/edit/{id}', ['as' => 'quote_show', 'uses' => 'QuoteController@show']);
Route::post('/quote/edit', ['as' => 'quote_edit', 'uses' => 'QuoteController@edit']);
Route::get('/quote/{id}', ['as' => 'quote', 'uses' => 'QuoteController@index']);


