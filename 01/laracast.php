<?php

$myName = htmlspecialchars($_GET['name']);

$names = [
	'Maks',
	'Sergey',
	'Oleg'
];

$names[] = 'Pavel';

$person = [
	'name' => 'Sergey',
	'job' => 'web dev',
	'age' => 31
];

$person["bigBoss"] = true;

function dd($value)
{
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
}


require (__DIR__ . '/laracast.html');
