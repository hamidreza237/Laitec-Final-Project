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
    return view('website.index');
});

Auth::routes();


Route::middleware(['auth'])->prefix('AdminPage')->group(function () {
    Route::get('/MainPage', 'HomeController@index')->name('main');
    Route::resource('/setting','SettingController');
    Route::resource('/slider','SliderController');
    Route::resource('/about','AboutController');
});
