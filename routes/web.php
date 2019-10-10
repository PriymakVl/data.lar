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

//book
Route::get('/books', ['as' => 'books', 'uses' => 'BookController@books']);
Route::any('/book/rating', 'BookController@rating');
Route::match(['get', 'post'], '/book/add', ['as' => 'book_add', 'uses' => 'BookController@add']);
Route::match(['get', 'post'], '/book/edit/{id?}', ['as' => 'book_edit', 'uses' => 'BookController@edit']);
Route::get('/book/delete/{id}', ['as' => 'book_delete', 'uses' => 'BookController@delete']);
Route::match(['get', 'post'], '/book/file/{id?}', ['as' => 'book_file', 'uses' => 'BookController@file']);
Route::get('/book/{id}', ['as' => 'book', 'uses' => 'BookController@index']);

//author
Route::get('/authors', ['as' => 'authors', 'uses' => 'AuthorController@authors']);
Route::match(['get', 'post'], '/author/add', ['as' => 'author_add', 'uses' => 'AuthorController@add']);
Route::get('/author/delete/{id}', ['as' => 'author_delete', 'uses' => 'AuthorController@delete']);
Route::match(['get', 'post'], '/author/edit/{id?}', ['as' => 'author_edit', 'uses' => 'AuthorController@edit']);
Route::get('/author/search', ['as' => 'author_search', 'uses' => 'AuthorController@search']);
Route::get('/author/{id}', ['as' => 'author', 'uses' => 'AuthorController@index']);

//quote
Route::get('/quotes', ['as' => 'quotes', 'uses' => 'QuoteController@quotes']);
Route::match(['get', 'post'], '/quote/add', ['as' => 'quote_add', 'uses' => 'QuoteController@add']);
Route::match(['get', 'post'], '/quote/edit/{id?}', ['as' => 'quote_edit', 'uses' => 'QuoteController@edit']);
Route::get('/quote/delete/{id}', ['as' => 'quote_delete', 'uses' => 'QuoteController@delete']);
Route::any('/quote/rating', 'QuoteController@rating');
Route::match(['get', 'post'], '/quote/file/{id?}', ['as' => 'quote_file', 'uses' => 'QuoteController@file']);
Route::get('/quote/{id}', ['as' => 'quote', 'uses' => 'QuoteController@index']);

//tag
Route::get('/tags', ['as' => 'tags', 'uses' => 'TagController@tags']);
Route::match(['get', 'post'], '/tag/add', ['as' => 'tag_add', 'uses' => 'TagController@add']);
Route::match(['get', 'post'], '/tag/edit/{id?}', ['as' => 'tag_edit', 'uses' => 'TagController@edit']);
Route::get('/tag/delete/{id}', ['as' => 'tag_delete', 'uses' => 'TagController@delete']);
Route::get('/tag/{id}', ['as' => 'tag', 'uses' => 'TagController@index']);

//category
Route::get('/categories', ['as' => 'cats', 'uses' => 'CategoryController@categories']);
Route::match(['get', 'post'], '/category/add', ['as' => 'cat_add', 'uses' => 'CategoryController@add']);
Route::match(['get', 'post'], '/category/edit/{id?}', ['as' => 'cat_edit', 'uses' => 'CategoryController@edit']);
Route::get('/category/delete/{id}', ['as' => 'cat_delete', 'uses' => 'CategoryController@delete']);
Route::get('/category/{id}', ['as' => 'cat', 'uses' => 'CategoryController@index']);

