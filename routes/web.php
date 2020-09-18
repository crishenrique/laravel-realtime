<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function (){
    Route::get('chat', 'Chat\ChatController@index')->name('chat');

    Route::get('chat/message', 'Chat\ChatController@messages');   
    Route::post('chat/message', 'Chat\ChatController@store');   
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
