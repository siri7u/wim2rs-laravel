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

Route::get('contact', function () {
    return view('contact');
});
Route::get('a-propos', function () {
    return view('a-propos');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/salut/{name}', function ($name) {
    return "Salut $name";
});

Route::get('/clients', 'ClientsController@index');
Route::post('clients', 'ClientsController@store');





//Route::view('/', 'welcome');
//Route::view('contact', 'contact');
//Route::view('a-propos', 'a-propos');


