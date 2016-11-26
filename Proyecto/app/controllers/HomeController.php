<?php

class HomeController extends BaseController {

	private $_clase = null;
	
	public function __construct()
    {
		// Categorias para el menú
		$categorias = Categoria::where('padre', 0)->get();
		$this->_clase = '';
		View::share('claseBody', $this->_clase);
		View::share('categoriasPadre', $categorias);
    }
	public function getInicio()
	{
		$clase = 'inicio';
		// obtener los productos destacados
		$destacados = Producto::where('destacado', 1)->get();
		return View::make('inicio')
				->with('claseBody', $clase)
				->with('menu', 'inicio')
				->with('destacado', $destacados);
	}
	public function getContacto()
	{
		return View::make('contacto')
				->with('menu', 'contacto');
	}
	public function getCategoria($nivel1 = 'damas', $nivel2 = '', $nivel3 = '')
	{
		$clase = 'inicio';
		$categoriaNivel2 = null;
		$categoriaNivel3 = null;
		
		// nivel 1
		$categoria = Categoria::where('url', $nivel1)->get();
		$categoriaNivel1 = Categoria::where('padre', $categoria[0]->id)->get();
		$breadcrumb = $nivel1;
		
		// nivel 2
		if ($nivel2 !== '') {
			$categoria = Categoria::where('url', $nivel2)->get();
			$categoriaNivel2 = Categoria::where('padre', $categoria[0]->id)->get();
			$breadcrumb = $nivel2;
		}
		
		// nivel 3
		if ($nivel3 !== '') {
			$categoria = Categoria::where('url', $nivel3)->get();
			$categoriaNivel3 = Categoria::where('padre', $categoria[0]->id)->get();
			$breadcrumb = $nivel3;
		}
		
		// la vista
		return View::make('categoria')
				->with('claseBody', $clase)
				->with('breadcrumb', $breadcrumb)
				->with('menu', $nivel1)
				->with('nivel1', $nivel1)
				->with('nivel2', $nivel2)
				->with('nivel3', $nivel3)
				->with('categoriaNivel1', $categoriaNivel1)
				->with('categoriaNivel2', $categoriaNivel2)
				->with('categoriaNivel3', $categoriaNivel3);
	}
	public function getProducto()
	{
		return View::make('producto')
				->with('menu', 'damas');
	}
	public function getDamas()
	{
		//return View::make('damas');
	}

}
