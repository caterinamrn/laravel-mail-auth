<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'GuestController@index') -> name('post-index') ;


Route::get('/post', 'LoggedController@create') -> name('post-create') ;
Route::post('/post/store', 'LoggedController@store') -> name('post-store') ;
Route::get('/post/{id}/delete', 'LoggedController@delete') -> name('post-delete') ;
Route::get('/post/{id}/edit', 'LoggedController@edit') -> name('post-edit') ;
Route::post('/post/{id}/update', 'LoggedController@update') -> name('post-update') ;

Route::get('/post/{id}', 'GuestController@show') -> name('post-show') ;

Auth::routes();
