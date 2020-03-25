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
    Route::post('/register', 'User\RegisterController@register')->name('user.register.submit');
    Route::post('/login', 'User\LoginController@login')->name('user.login.submit');
    Route::get('/home', 'User\UserDashboardController@index')->name('user.home');
    Route::get('/dashboard', 'User\UserDashboardController@UserDashboard')->name('user.dashboard');
    Route::get('/profile', 'User\UserDashboardController@profile');  
    Route::post('/update-profile/{id}', 'User\UserDashboardController@Updateprofile');  
    Route::get('/services', 'User\UserDashboardController@servicesList');  
    Route::get('/compare', 'User\UserDashboardController@compareAssociate');  
    Route::post('/compare-associate', 'User\UserDashboardController@compareResult');  
    Route::get('/feedback', 'User\UserDashboardController@feedbackForm');  
    Route::post('/save-feedback', 'User\UserDashboardController@feedbacksubmit');  
    Route::post('/quote', 'Service\ServicePageController@userLeads');  
    Route::post('/logout', 'User\LoginController@logout')->name('user.logout');
    Route::get('/works', 'User\UserDashboardController@worksList');  
    Route::get('/upload', 'User\UserDashboardController@upload');  
    Route::post('/save-upload', 'User\UserDashboardController@saveupload'); 
    Route::get('/library', 'User\UserDashboardController@library');  
    Route::get('/works/{id}', 'User\UserDashboardController@work');  
    Route::post('/chat', 'User\UserDashboardController@savechat'); 
}); 