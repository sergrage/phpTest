<?php

// паттерн внедрения зависимости

class Person {

	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

}

class Business {

	protected $staff;

	public function __construct(Staff $staff)
	{
		$this->staff =  $staff;
	}

	public function hire(Person $person)
	{
		$this->staff->add($person);
	}

}

class Staff {

	protected $members = [];


	public function __construct($members=[])
	{
		$this->members = $members;
	}

	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	public function getMembers()
	{
		return $this->members;
	}

}

$JohnDou = new Person('John Dou');

$staff = new Staff([$JohnDou]);

$laraJob = new Business($staff);

$laraJob->hire(new Person('Jane Doe'));

var_dump($staff->getMembers());