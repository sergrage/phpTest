<?php

//http://php.net/manual/ru/language.operators.errorcontrol.php
// @ перед функцией выключает вывод ошибок



//declare(strict_types = 1); // включает строгую типизацию


// function sum (int $a, int $b) {
// 	return $a + $b;	
// }

// echo sum('3', 5);


//var_dump(3 + function() { return 8; } ) ;

$book = ['The Title', 'Author'];

[$title, $author] = $book;

echo $title;

$books = [
	['title' => 'The Title', 'author' => 'Author'],
	['title' => 'The Title2', 'author' => 'Author2']
];

foreach($books as ['title' => $title, 'author' => $author]) {
	echo $title . 'by' . $author;
}


$name = 'Jack';

$name = $name ?? 'John';

echo $name;