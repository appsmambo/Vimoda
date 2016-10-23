<?php

class HomeController extends BaseController {

	public function getInicio()
	{
		return View::make('inicio');
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
