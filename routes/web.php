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

Route::get('/submitflag', function () {
    return view('submitflag');
})->middleware('auth');

Route::post('/submitflag', 'FlagController@checkingFlag')->name('flag.submit');

Route::get('/play', function () {
    return view('play');
})->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/hint/5468354512354687651', function () {
    return view('hint1');
})->middleware('auth');

Route::get('/play/game1', function () {
    return view('game1');
})->middleware('auth');

Route::get('/play/game2', function () {
    return view('game2');
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
