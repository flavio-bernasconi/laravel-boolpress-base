<?php


Route::get('/','MyController@index')->name('start');
Route::get('/{id}/category','MyController@show')->name('showPost');

Route::get('/{id}/SinglePost','MyController@showSinglePost')->name('showSinglePost');

Route::get('/createPost','MyController@create')->name('createPost');
Route::post('/','MyController@store')->name('storePost');

Route::get('/editPost/{id}','MyController@edit')->name('editSinglePost');
Route::post('/update/{id}','MyController@update')->name('updateSinglePost');

Route::get('/deletePost/{id}','MyController@destroy')->name('deleteSinglePost');

Route::get('/tagPost/{id}','MyController@showByTag')->name('showTag');
