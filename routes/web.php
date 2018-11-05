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

Route::get('/', 'HomeController@index')
        ->name('home');

Route::get('/articles', 'ArticlesController@index')
        ->name('articles');

Route::get('/articles/{id}', 'ArticlesController@getArticle')
        ->name('article');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/{category}/articles', 'ArticlesController@getArticlesByCategory')
        ->name('category');
