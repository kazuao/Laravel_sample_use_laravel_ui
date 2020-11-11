<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth.admin']], function () {

    // 管理側TOP
    Route::get('/admin', 'admin\AdminTopCOntroller@show');

    // ログアウト実行
    Route::post('/admin/logout', 'admin\AdminLogoutController@logout');

    // ユーザ一覧
    Route::get('/admin/user_list', 'admin\ManageUserController@showUserList');

    // ユーザ詳細
    Route::get('/admin/user/{id}', 'admin\ManageUserController@showUserDetail');
});

// 管理側ログイン
Route::get('/admin/login', 'admin\AdminLoginController@showLoginform');
Route::post('/admin/login', 'admin\AdminLoginController@login');
