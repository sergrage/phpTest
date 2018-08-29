<?php


$router->get('laracast01', 'PagesController@home');
$router->get('laracast01/about', 'PagesController@about');
$router->post('laracast01/names', 'PagesController@names');


// echo '<pre>';
// var_dump($router->routes);
// echo '</pre>';
// die();