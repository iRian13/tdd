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
    return view('frontend.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Brand Route*/
Route::get('/brand', 'BrandController@index')->name('brand.list');
Route::get('/brand-create', 'BrandController@create')->name('brand.create');
Route::post('/brand-create', 'BrandController@store')->name('brand.store');
/*Brand Route End*/
