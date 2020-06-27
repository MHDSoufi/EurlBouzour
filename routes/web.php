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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/user', 'UserController');
Route::resource('/promo', 'PromoController');
Route::resource('/bien', 'BienController');
Auth::routes();

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