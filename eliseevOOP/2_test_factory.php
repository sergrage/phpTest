<?php

class Student {
	
	private $firstName;
	private $lastName;
	private $birthDate;

	public function __construct($firstName, $lastName, $birthDate)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->birthDate = $birthDate;
	}

	public function getFullName()
	{
		return $this->firstName . ' ' . $this->lastName;
	}

	public function getDate()
	{
		return $this->birthDate;
	}
}


class TXTRepository {
	
	private $file;

	public function __construct($file)
	{
		return $this->file = $file;
	}

	public static function testString($value)
	{
		return $value . '!!!';
	}

	public function findAll()
	{
		$data = file($this->file);

		$students = [];

		foreach ($data as $line) {
			$values = array_map('trim', explode(';', $line)); // 'self::testString'
			$students[] = new Student($values[0], $values[1], ($values[2]));
		}

		return $students;
	}

	public function findAllByDate($date)
	{
		$data = file($this->file);

		$students = [];

		foreach ($data as $line) {
			$values = array_map('trim', explode(';', $line)); // 'self::testString'

			if($values[2] == $date){
				$students[] = new Student($values[0], $values[1], ($values[2]));
			}
			
		}
		return $students;
	}
}


class XMLRepository {
	private $file;

	public function __construct($file)
	{
		return $this->file = $file;
	}

	public function findAll()
	{
		$data = simplexml_load_file($this->file);

		$students = [];

		foreach ($data as $line) {
			$values = array_map('trim', explode(';', $line));
			$students[] = new Student($values[0], $values[1], ($values[2]));
		}

		return $students;
	}
}


class RepositoryFactory {
	public static function create($type, $file)
	{
		switch($type) {
			case 'txt' :
				$openTXT = new TXTRepository($file);
				break; 
			case 'xml' :
				$openTXT = new XMLepository($file);
				break;
			default:
				die('Incorrect type ' . $type);
		}

		return	$openTXT;
	}
}

///////////////////////////////////////////////////////

$file = __DIR__ . '/list.txt';
$type = 'txt';


$openFile = RepositoryFactory::create($type, $file); 

////////////////////////////////////////////////////////

$StubentsList = $openFile->findAll();

$StubentsList2 = $openFile->findAllByDate('1990-01-12');

var_dump($StubentsList2);

foreach ($StubentsList as $student) {
	echo $student->getFullName() . " " . $student->getDate() . '<br>';
}

foreach ($StubentsList2 as $student) {
	echo $student->getFullName() . " " . $student->getDate() . '<br>';
}
