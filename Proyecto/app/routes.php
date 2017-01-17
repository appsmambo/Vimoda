<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));
Route::get('/contacto', array('as' => 'contacto', 'uses' => 'HomeController@getContacto'));

// categoría de productos
Route::get('/categoria/{nivel1?}/{nivel2?}/{nivel3?}', array('as' => 'categoria', 'uses' => 'HomeController@getCategoria'));

// detalle de productos
Route::get('/damas/sandalias/azaleia-106', array('as' => 'detalle', 'uses' => 'HomeController@getProducto'));

// backend
Route::get('/admin-area', array('as' => 'login', 'uses' => 'AdminController@getLogin'));
Route::post('/login', array('uses' => 'AdminController@postLogin'));
Route::get('/admin-logout', 'AdminController@getLogout');
Route::group(array('before' => 'auth.admin'), function()
{
	Route::get('/admin-inicio', array('as' => 'admin.inicio', 'uses' => 'AdminController@getAdminInicio'));
	Route::get('/admin-sliders', array('as' => 'admin.sliders', 'uses' => 'AdminController@getAdminSliders'));
	Route::get('/admin-configuracion', array('as' => 'admin.configuracion', 'uses' => 'AdminController@getAdminConfiguracion'));
	
	Route::post('/admin-consulta', 'AdminController@postConsulta');
	Route::get('/admin-registrados', 'AdminController@getRegistrados');
	Route::post('/admin-registrados', 'AdminController@postRegistrados');
	Route::post('/admin-registrados-rango', 'AdminController@postRegistradosRango');
	Route::get('/admin-reporte/{dia}/{mes}/{anio}/{ganadores}', 'AdminController@getReporte');
	Route::get('/admin-reporte-rango/{diaI}/{mesI}/{anioI}/{diaF}/{mesF}/{anioF}', 'AdminController@getReporteRango');
});
Route::filter('auth.admin', function()
{
	if (!Auth::check()) {
		return Redirect::route('login');
	}
});
