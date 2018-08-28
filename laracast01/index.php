<?php


require 'Task.php';


$query = require 'core/bootstrap.php';


require Router::load('routes.php')->direct(Request::uri());






//$statment1 = $pdo->prepare("INSERT INTO todos (description, completed) values ('Learn PHP', true)");
//$statment1->execute();