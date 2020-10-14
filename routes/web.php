<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'StaticPagesController@home')
    ->name('home');
Route::get('/help', 'StaticPagesController@help')
    ->name('help');
Route::get('/about', 'StaticPagesController@about')
    ->name('about');

Route::get('signup', 'UserController@create')
    ->name('signup');
Route::resource('users', 'UserController');

Route::get('login', 'SessionsController@create')
    ->name('login');
Route::post('login', 'SessionsController@store')
    ->name('login');
Route::delete('logout', 'SessionsController@destroy')
    ->name('logout');
Route::get('/users/{user}/edit', 'UserController@edit')
    ->name('users.edit');
//邮件激活功能
Route::get('signup/confirm/{token}', 'UserController@confirmEmail')
    ->name('confirm_email');
//重置密码功能
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')
    ->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')
    ->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')
    ->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')
    ->name('password.update');
//微博
Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);

#粉丝
Route::get('/users/{user}/followings', 'UserController@followings')
    ->name('users.followings');
Route::get('/users/{user}/followers', 'UserController@followers')
    ->name('users.followers');
#关注按钮
Route::post('/users/followers/{user}', 'FollowersController@store')
    ->name('followers.store');
Route::delete('/users/followers/{user}', 'FollowersController@destroy')
    ->name('followers.destroy');
#修改分数
Route::post('/users/scoreEdit', 'UserController@scoreEdit')
    ->name('users.scoreEdit');
