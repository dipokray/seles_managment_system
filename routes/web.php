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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/company','CompanyController@index')->name('index-company');
Route::post('/save/company','CompanyController@store')->name('store-company');
Route::get('/show/company','CompanyController@show')->name('show-company');
Route::get('/edit/company/{id}','CompanyController@edit')->name('edit-company');
Route::post('/update/company','CompanyController@update')->name('update-company');
Route::get('/delete/company/{id}','CompanyController@destroy')->name('delete-company');

Route::get('/add/category','CategoryController@index')->name('index-category');
Route::post('/store/category','CategoryController@store')->name('store-category');
Route::get('/edit/category/{id}','CategoryController@edit')->name('edit-category');
Route::post('/update/category','CategoryController@update')->name('update');
Route::get('/delete/category/{id}','CategoryController@destroy')->name('delete-category');

Route::get('/add/quantity','QuantityController@index')->name('index-quantity');










Route::get('/add','AccessoriesController@index')->name('index-accessories');



