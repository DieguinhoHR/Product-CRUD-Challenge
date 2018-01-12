<?php

/**
 * Routes to makes authentication
 */
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/tags', 'ProductController@listTeenTagsMoreUseds');
Route::resource('/products', 'ProductController');
