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
Route::get('/allianz-aliado-experto', 'ContactsController@index')->name('allianz.aliado.experto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('data/import', 'ContactsController@import')->middleware('auth.basic');



/*Route::get('data/import', function () {
	return view('gracias');
    // Only authenticated users may enter...

})->middleware('auth.basic');*/