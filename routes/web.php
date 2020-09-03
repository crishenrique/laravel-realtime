<?php

use Illuminate\Support\Facades\Route;

Route::get('chat', 'Chat\ChatController@index')->middleware([])->name('chat');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
