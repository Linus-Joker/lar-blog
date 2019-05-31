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

Route::get('/', function () {
	return view('welcome');
});

Route::any('uploaded', 'Admin\IndexController@upload');

// 管理員註冊頁面
Route::get('registed', 'Admin\IndexController@registed');


// 路由群組
// Route::namespace('Admin')->group(function () {
// 	Route::get('home', 'IndexController@home');
// 	Route::get('registed', 'IndexController@registed');
// 	Route::post('index', 'IndexController@index');
// });

// 管理員操作介面
Route::group(['namespace' => 'Admin', 'middleware' => ['web', 'AdminLogin']], function () {
	Route::any('index', 'IndexController@index');
	Route::get('info', 'IndexController@info');
	Route::get('quit', 'IndexController@quit');

	// 管理資源路由
	Route::resource('category', 'categoryController');
});

Route::group(['namespace' => 'Admin', 'middleware' => ['web']], function () {

	// 管理員登入頁面
	Route::get('home', 'IndexController@home');

	// 管理員登入路徑
	Route::any('logins', 'IndexController@logins');
});


//使用者讀取Blog
Route::group(['namespace' => 'Blog'], function () {
	Route::get('blog', 'blogController@blog');
	Route::get('bloglogin', 'blogController@bloglogin');
	Route::post('bloglogin', 'blogController@bloglogintest');
	Route::get('blogregisted', 'blogController@blogregisted');
	Route::post('blogregisted', 'blogController@blogregistedtest');
	Route::get('blogquit', 'blogController@quit');
	Route::get('a/{article_id}', 'blogController@art');
	// Route::get('a/', 'blogController@art');
});

//測試前端套件
Route::get('testfont', 'Admin\IndexController@testfont');

Auth::routes();

Route::get('/homes', 'HomeController@index')->name('home');
