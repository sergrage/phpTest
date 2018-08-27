<?php


require __DIR__ . '/Task.php';


$query = require __DIR__ . '/bootstrap.php';

//$statment1 = $pdo->prepare("INSERT INTO todos (description, completed) values ('Learn PHP', true)");
//$statment1->execute();

$table = 'todos';




$todos = $query->selectAll($table, 'Task');

// echo '<pre>';
// var_dump($todos);
// echo '</pre>';


require 'index.view.php';

?>