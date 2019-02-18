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

Route::resource('tester', 'TesterController');
Route::resource('penyakit', 'PenyakitController');
Route::resource('result', 'ResultController');
Route::get('refreshPenyakit', 'PenyakitController@refreshPenyakit')->name('refreshPenyakit');
Route::get('refreshGejala/{penyakit}', 'GejalaController@refreshGejala')->name('refreshGejala');
Route::post('checkValidate', 'TesterController@checkValidate')->name('testerCheckValidate');

Route::get('getPenyakit/{penyakit}', 'PenyakitController@getPenyakit');
Route::get('getObats/{penyakit_id}/{range}/{range_min}', 'ObatController@getObats');
Route::post('tested/store', 'TestedController@store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
