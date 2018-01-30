<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/messages/', 'MessageController@index')->name('messages.index');
Route::post('/messages/', 'MessageController@store')->name('messages.store');
Route::get('/mail/contact/', 'HomeController@sendContactMail');
