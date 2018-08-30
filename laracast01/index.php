<?php

require 'vendor/autoload.php';

$query = require 'core/bootstrap.php';


use Core\Router;
use Core\Request;


Router::load('routes.php')
	->direct(Request::uri(), Request::method());

//$statment1 = $pdo->prepare("INSERT INTO todos (description, completed) values ('Learn PHP', true)");
//$statment1->execute();