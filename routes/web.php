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

Route::get('/aumkhrit', function(){
    return view('aumkhrit.index');
});

Route::get('/apiwat56', 'ApiwatController@index');

Route::get('/khomsunt', function(){
    return view('khomsunt.index');
});

Route::get('/jbarnes35', function(){
    return view('jbarnes35.index');
});

Route::get('/memberren', function(){
    return view('memberren.index');
});
