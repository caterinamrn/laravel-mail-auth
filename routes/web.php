<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'GuestController@index') -> name('post-index') ;
Route::get('/post/{id}', 'GuestController@show') -> name('post-show') ;


Auth::routes();
