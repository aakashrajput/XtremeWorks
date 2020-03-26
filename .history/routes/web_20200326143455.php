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


//Main Site Routes

Route::get('/', function () {
    return view('site.index');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/user/login', function () {
    return view('site.login');
});

Route::get('/user/register', function () {
    return view('site.register');
});


Route::prefix('user')->group(function() {
    Route::post('/register', 'User\RegisterController@register')->name('user.register.submit');
    Route::post('/login', 'User\LoginController@login');
    Route::get('/home', 'User\UserHomeController@index');
    Route::get('/wallet', 'User\UserHomeController@WalletPage');
    Route::get('/profile', 'User\UserHomeController@WalletPage');
}); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
