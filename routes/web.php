<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function (){
    Route::get('chat', 'Chat\ChatController@index')->name('chat');

    Route::get('chat/messages', 'Chat\ChatController@messages');   
    Route::post('chat/message', 'Chat\ChatController@store');   

    Route::get('meu-perfil', 'User\UserController@profile')->name('profile');
    Route::post('meu-perfil', 'User\UserController@profileUpdate')->name('profile.update');
});

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');