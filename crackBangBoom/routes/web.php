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

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', ['as' => '/register', 'uses' => 'UserController@save_user']);


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/prueba', function () {
    return view('contact');
});

Route::get('/', 'IndexController@cargarIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
