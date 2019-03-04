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

Route::middleware(['locale'])->group(function () {
    Route::get('/', 'HomeController@index')->name('homepage');

    Route::get('/change-locale', 'HomeController@changeLocale')->name('locale.change');

    Route::get('/datasheet', 'HomeController@datasheet')->name('datasheet');
    Route::get('/brochure', 'HomeController@brochure')->name('brochure');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
