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
    return redirect ('login');
});

Route::get('login','App\Http\Controllers\LoginController@login_form');
Route::post('login','App\Http\Controllers\LoginController@do_login');
Route::get('register','App\Http\Controllers\LoginController@register_form');
Route::post('register','App\Http\Controllers\LoginController@do_register');
Route::get('logout','App\Http\Controllers\LoginController@logout');


Route::get('home','App\Http\Controllers\HomeController@home');

Route::get('ricetta','App\Http\Controllers\RicettarioController@do_ricetta');
Route::get('ricetta/{ricerca}','App\Http\Controllers\RicettarioController@curl');


Route::get('shop/elenco','App\Http\Controllers\ShopController@do_shop');
Route::get('shop','App\Http\Controllers\ShopController@show_shop');

Route::get('carrello/acquista/{id}','App\Http\Controllers\CarrelloController@add_carrello');
Route::get('carrello/aggiorna/','App\Http\Controllers\CarrelloController@update_carrello');
Route::get('carrello/elimina/{id_vendita}','App\Http\Controllers\CarrelloController@delete_carello');
Route::get('carrello','App\Http\Controllers\CarrelloController@show_carrello');