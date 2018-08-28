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



class Post {

	public $title;
	public $published;

	public function __construct($title, $published)
	{
		$this->title = $title;
		$this->published = $published;
	}
}

$posts = [
	new Post('One', true),
	new Post('Two', true),
	new Post('Three', true),
	new Post('Four', false),
];

$posts1 = array_filter($posts, function($post){

	return $post->published === true;

});

$posts2 = array_map(function($post){
	return  new Post($post->title . '123', true);
}, $posts1);








require (__DIR__ . '/laracast.html');
