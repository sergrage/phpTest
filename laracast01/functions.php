<?php 

function connectToDB()
{
	try{
		return new PDO('mysql:host=127.0.0.1;dbname=laracast', 'root', '');	
	} catch (PDOException $e) {
		die('Could not connect.');
	}
}

function fetchAllTasks($pdo)
{
	$statment = $pdo->prepare('select * from todos');
	$statment->execute();
	return $statment->fetchAll(PDO::FETCH_CLASS, 'Task');
}






















?>