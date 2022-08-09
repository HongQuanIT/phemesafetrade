<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'WelcomeController@index')->name('welcome');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        /**
         * Fogot Pass Routes
         */
        Route::get('/forgot', 'ForgotPassController@show')->name('forgot.show');
        Route::post('/forgot', 'ForgotPassController@login')->name('forgot.perform');
        
        Route::get('/profile', 'ProfileController@show')->name('profile.show');
        Route::get('/support', 'SupportController@show')->name('support.show');
    });

    Route::group(['middleware' => ['web','auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/dashboard', 'DashboardController@show')->name('dashboard.show');

        Route::resource('users', UserController::class);
        Route::get('/auth-profile', 'AuthController@show')->name('auth.show');
        Route::post('/auth-profile', 'AuthController@edit')->name('auth.edit');
        Route::get('/investment', 'InvestmentController@show')->name('investment.show');
    });
});