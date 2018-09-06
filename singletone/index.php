<?php

require 'vendor/autoload.php';

use SomeFolder\DB;
use SomeFolder\Config;

$config = Config::getInstance('config');

$config->setConfig(
'{"dsn":"mysql:host=127.0.0.1;dbname=laracast",
"user":"root",
"pass":""}'
);


// Init the db connection (which depends on the Config singleton)
$db = DB::getInstance('database');

// Query a made up table
$statment = $db->handler->prepare("SELECT * FROM tasks");
$statment->execute();
$todos = $statment->fetchAll();

echo '<pre>';
die(var_dump($todos));
echo '</pre>';


// $db1 = DB::getInstance();
// $db2 = DB::getInstance();


// var_dump($db1 == $db2);
