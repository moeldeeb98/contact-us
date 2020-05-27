<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'frontend\HomeController@index')->name('contact-us.index');
Route::post('/', 'frontend\HomeController@store')->name('contact-us.store');

Route::namespace('backend')->prefix('admin')->middleware('admin')->group(function (){

    Route::get('/', function (){
        return redirect()->route('admin.home');
    });

    Route::get('messages', 'MessagesController@index')->name('messages.index');
    Route::delete('messages/{message}', 'MessagesController@destroy')->name('messages.destroy');
    Route::get('messages/{id}', 'MessagesController@show')->name('admin.showMessage');
    Route::post('messages/{id}', 'MessagesController@reply')->name('admin.replyMessage');
    Route::resource('contacts', 'ContactsController')->except('show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
