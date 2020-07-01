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

// routes IHM Client
Route::view('/{path?}', 'welcome');


Route::resource('Admin/user', 'UserController');
Route::resource('Admin/promo', 'PromoController');
Route::resource('Admin/bien', 'BienController');

//les route d'authentification 
Route::get('Admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('Admin/login', 'Auth\AuthController@login');
Route::get('Admin/logout', 'Auth\AuthController@logout');

    // Registration Routes...
Route::get('Admin/register', 'Auth\AuthController@showRegistrationForm');
Route::post('Admin/register', 'Auth\AuthController@register');

    // Password Reset Routes...
Route::get('Admin/password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('Admin/password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('Admin/password/reset', 'Auth\PasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

//les route pour les comunes
Route::get('comune/{id}', 'ComuneController@commune')->name('comune');
Route::get('comune/byId/{id}', 'ComuneController@communeById')->name('comuneById');
Route::post('/comune/Add', 'ComuneController@addCommune')->name('AddComune');

//les routes pour les comodité
Route::get('comode/{id}', 'ComoditeController@giveComodeNa')->name('comode');
Route::get('comode/{promoId}/{comodId}', 'ComoditeController@deleteComode')->name('comodeDelet');

Route::post('/promo/image/upload', 'ImagesController@fileUpload');
Route::get('promo/image/delete', 'ImagesController@removeUpload');
