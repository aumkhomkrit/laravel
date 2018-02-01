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

Route::get('/aumkhrit', 'AumController@index');
Route::post('/aumkhrit', 'AumController@store');
Route::get('/aumkhrit/{aum}', 'AumController@view');
Route::put('/aumkhrit/{aum}/edit', 'AumController@update');
Route::get('/aumkhrit/{aum}/delete', 'AumController@destroy');


Route::get('/apiwat56', 'ApiwatController@index');
Route::post('/apiwat56', 'ApiwatController@store');
Route::get('/apiwat56/{apiwat}', 'ApiwatController@view');
Route::put('/apiwat56/{id}/edit', 'ApiwatController@update');
Route::get('/apiwat56/{id}/delete', 'ApiwatController@destroy');

Route::get('/khomsunt', function(){
    return view('khomsunt.index');
});

Route::get('/jbarnes35', function(){
    return view('jbarnes35.index');
});

Route::get('/memberren', function(){
    return view('memberren.index');
});
