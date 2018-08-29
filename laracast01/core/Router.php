<?php

class Router {

	public $routes = [
		'GET' => [],
		'POST' => []
	];

	public function load($file)
	{
		$router = new static;

		require $file;

		return $router;
		
	}


// в массив routes в GET добвляется uri => controller
	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

// $requestType это или POST или GET. 
	public function direct($uri, $requestType)
	{

		if(array_key_exists($uri, $this->routes[$requestType])) {

			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		throw new Exception('No Route defined for this URI');
	}

	public function callAction($controller, $action)
	{
		if(! method_exists($controller, $action)){

			throw new Exception(
				"{$controller} does not respond to the {$action} action"
			);

		}

		return (new $controller)->$action();
	}

}