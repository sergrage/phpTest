<?php

use Core\App;



App::bind('config', require 'config.php');

$config = App::get('config')['database'];


App::bind('database', new QueryBuilder(Connection::make($config)));


function view($name, $data = [])
{
	extract($data);
	return require "views/{$name}.view.php";
}

function redirect($path)
{
	header("Location: /{$path}");
}