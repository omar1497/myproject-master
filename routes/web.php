<?php

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
Route::get('/index', function () {
    return view('index');
});
Route::get('/index-1', function () {
    return view('index-1');
});
Route::get('/index-3', function () {
    return view('index-3');
});
Route::get('/index-5', function () {
    return view('index-5');
});
Route::get('/index-6', function () {
    return view('index-6');
});
Route::get('produit', function () {
    return view('index-3');
});
Route::get('index-produit', 'ProduitController@index');
Route::get('create-produit', 'ProduitController@create');
Route::post('produit', 'ProduitController@store');


Route::get('index-client', 'ClientController@index');
Route::get('ContactUs', 'ClientController@create');
Route::post('home', 'ClientController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
