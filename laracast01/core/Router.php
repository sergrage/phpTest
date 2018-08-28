<?php

class Router {

	protected $routes = [
		'GET' => [],
		'POST' => []
	];

	public function load($file)
	{
		$router = new static;

		require $file;

		return $router;
		
	}

	public function define($routes)
	{
		
		$this->routes = $routes;

	}

	public function direct($uri)
	{



		if(array_key_exists($uri, $this->routes)) {

				// 			 echo '<pre>';
			 // var_dump($this->routes[$uri]);
			 // echo '</pre>';
			 // dei();

			return $this->routes[$uri];
		}

		throw new Exception('No Route defined for this URI');
	}





}