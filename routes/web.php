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

Route::get('/', 'MainController@index')->name('home');
Route::get('/about/us', 'MainController@about')->name('about_us');
Route::get('/us/price', 'MainController@price')->name('price');
Route::get('/us/shop', 'ShopController@index')->name('shop');
Route::get('/{slug}', 'MainController@show_fou')->name('home_two');

Route::get('/problema/{slug}', 'MainController@show_sec')->name('problema');
Route::get('/usluga/{slug}', 'MainController@show_thi')->name('usluga');

Route::get('/remont/{slug}', 'MainController@show')->name('remont');
Route::post('/send', 'MainController@send');








