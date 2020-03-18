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

Route::get('/subs', function () {
    //get data from db
    $subs = [
        ['type' => 'bmt', 'bread' => 'italian'],
        ['type' => 'meatball', 'bread' => 'herbs and cheese'],
        ['type' => 'breakfast', 'bread' => 'hearty italian']
    ];

    return view('subs', ['subs' => $subs]);
});
