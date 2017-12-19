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

Route::group(['middleware' => ['web']], function()
{
	Route::get('bmn/{slug}', ['as' => 'bmn.single', 'uses' => 'IndexController@getSingle'])->where('slug', '[\w\d\-\_]+');

	Route::get('/bmngraphics', 'IndexController@index')->name('index'); 

	Route::post('/bmngraphics', 'IndexController@postContact')->name('index');

	Route::get('/all', 'IndexController@all')->name('all');


});

Route::get('/sitemap', 'IndexController@sitemap');

Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController', ['except'=>['create']]);

Route::resource('clients', 'ClientController');

Route::resource('comments', 'CommentController');