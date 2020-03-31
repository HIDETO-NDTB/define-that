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

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);

Route::get('/popular', [
    'uses' => 'FrontEndController@popular',
    'as' => 'popular'
]);

Route::get('/legend', [
    'uses' => 'FrontEndController@legend',
    'as' => 'legend'
]);

Route::get('/initiative', [
    'uses' => 'FrontEndController@initiative',
    'as' => 'initiative'
]);

Route::get('/mypage/{id}', [
    'uses' => 'FrontEndController@mypage',
    'as' => 'mypage'
]);

Route::post('/store-define',[
    'uses' => 'DefineController@store',
    'as' => 'definestore'
]);

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'defines/{id}'],function(){
        Route::post('favorite','FavoriteController@store')->name('favorites.favorite');
        Route::delete('unfavorite','FavoriteController@destroy')->name('favorites.unfavorite');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
