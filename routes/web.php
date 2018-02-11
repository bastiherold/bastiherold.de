<?php

Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/messages/', 'MessageController@store')->name('messages.store');
Route::get('/mail/contact/', 'HomeController@sendContactMail');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

  Route::get('/', 'Admin\AdminController@index')->name('admin.home');

  Route::get('/messages', 'MessageController@index')->name('messages.index');
  Route::get('/messages/show/{message}', 'MessageController@show')->name('messages.show');

});
