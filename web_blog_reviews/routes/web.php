<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/about', 'App\Http\Controllers\MainController@about')->name('about');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');

Route::post('/review/check', 'App\Http\Controllers\MainController@review_check')->name('review_check');
