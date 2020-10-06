<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'GuestController@index') -> name('post-index') ;
Route::get('/post/{id}', 'GuestController@show') -> name('post-show') ;

Route::get('/post', 'LoggedController@create') -> name('post-create') ;
Route::post('/post/store', 'LoggedController@store') -> name('post-store') ;
Route::get('/post/{id}/delete', 'LoggedController@delete') -> name('post-delete') ;


Auth::routes();
