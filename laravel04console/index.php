<?php 

require 'vendor/autoload.php';

use SomeFolder\SayHelloCommand;
use SomeFolder\LaravelInstall;
use SomeFolder\ShowCommand;
use SomeFolder\AddCommand;
use SomeFolder\DatabaseAdapter;
use SomeFolder\CompleteCommand;


use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;



// $app2 = new Application('name2', 'version2');
// $app2->add(new SayHelloCommand());



// $app2->run();

// $app3 = new Application('name3', 'version3');
// $app3->add(new LaravelInstall(new GuzzleHttp\Client));



// $app3->run();

try {
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=laracast", 'root','');
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


$dbAdapter = new DatabaseAdapter($pdo);

// die(var_dump($dbAdapter));

$app4 = new Application('name4', 'version4');
$app4->add(new ShowCommand($dbAdapter));
$app4->add(new AddCommand($dbAdapter));
$app4->add(new CompleteCommand($dbAdapter));



$app4->run();