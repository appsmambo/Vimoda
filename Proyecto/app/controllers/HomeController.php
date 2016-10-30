<?php

class HomeController extends BaseController {

	private $_clase = null;
	
	public function __construct()
    {
		$this->_clase = '';
		View::share('claseBody', $this->_clase);
    }
	public function getInicio()
	{
		$clase = 'inicio';
		return View::make('inicio')->with('claseBody', $clase);
	}
	public function getProducto()
	{
		return View::make('producto');
	}
	public function getDamas()
	{
		return View::make('damas');
	}

}
