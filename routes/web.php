<?php

/**
 * Routes to makes authentication
 */
Auth::routes();

Route::get('/', 'HomeController@index');
Route::resource('/products', 'ProductController');
