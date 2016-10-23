<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));

Route::get('/damas', array('as' => 'damas', 'uses' => 'HomeController@getDamas'));
Route::get('/damas/sandalias/azaleia-106', array('as' => 'detalle', 'uses' => 'HomeController@getProducto'));
