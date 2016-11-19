<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));
Route::get('/contacto', array('as' => 'contacto', 'uses' => 'HomeController@getContacto'));

// categoría de productos
Route::get('/categoria/{nivel1?}/{nivel2?}/{nivel3?}', array('as' => 'categoria', 'uses' => 'HomeController@getCategoria'));

// detalle de productos

Route::get('/damas/sandalias/azaleia-106', array('as' => 'detalle', 'uses' => 'HomeController@getProducto'));
