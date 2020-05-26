<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'frontend\HomeController@index')->name('contact-us.index');
Route::post('/', 'frontend\HomeController@store')->name('contact-us.store');
