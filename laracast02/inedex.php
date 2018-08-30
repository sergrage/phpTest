<?php


class Task {

	public $description;

	public $completed = false;

	public function __construct($description)
	{
		$this->description = $description;
	}

	public function completed()
	{
		$this->completed = true;
	}

}

$task = new Task('Go to the store');

echo $task->description;

echo $task->completed();

if($task->completed){
	echo  123;
}



