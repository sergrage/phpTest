<?php 

require 'vendor/autoload.php';

use SomeFolder\SayHelloCommand;


use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;



$app2 = new Application('name2', 'version2');
$app2->add(new SayHelloCommand());



$app2->run();