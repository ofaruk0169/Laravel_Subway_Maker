<?php

use Illuminate\Support\Facades\Route;

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

//Here you are defining the URL followed by the controller handling the function data manipulation. The @ shows the particular function
// you are interested in
Route::get('/subs', 'SubsController@index')->middleware('auth');

Route::get('subs/create', 'SubsController@create');

Route::post('/subs', 'SubsController@store');

Route::get('/subs/{id}', 'SubsController@show')->middleware('auth');

Route::delete('/subs/{id}', 'SubsController@destroy')->middleware('auth');



Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

