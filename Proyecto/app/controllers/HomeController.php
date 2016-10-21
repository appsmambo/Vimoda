<?php

class HomeController extends BaseController {

	public function getInicio()
	{
		return View::make('inicio');
	}

}
