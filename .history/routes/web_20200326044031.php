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

Route::get('/login', function () {
    return view('site.login');
});

Route::get('/register', function () {
    return view('site.register');
});


Route::prefix('user')->group(function() {
    Route::get('/login', 'User\LoginController@showLoginForm')->name('user.login');
    Route::get('/register', 'User\RegisterController@showRegisterForm')->name('user.register');
}); 