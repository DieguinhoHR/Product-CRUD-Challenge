<?php

/**
 * Routes to makes authentication
 */
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/products', 'ProductController@index');
