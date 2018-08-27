<?php

require __DIR__ . '/Task.php';
require __DIR__ . '/functions.php';


$pdo = connectToDB();

//$statment1 = $pdo->prepare("INSERT INTO todos (description, completed) values ('Learn PHP', true)");
//$statment1->execute();




$todos = fetchAllTasks($pdo);


echo '<pre>';
var_dump($todos);
echo '</pre>';


require 'index.view.php';

?>