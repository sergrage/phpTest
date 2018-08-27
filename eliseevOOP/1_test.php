<?php

class Student {

	private $name; 
	private $type;

	const TYPE_OCHN = 1;
	const TYPE_ZAOCHN = 1;


	public function __construct($name, $type)
	{
		$this->name = $name;
		$this->type = $type;
	}

	public function createOchn($name)
	{
		return new self($name, self::TYPE_OCHN);
	}

	public function createZaochn($name)
	{
		return new self($name, self::TYPE_ZAOCHN);
	}

	public function isOchn()
	{
		return $this->type === self::TYPE_OCHN;
	}

}

$studend = Student::createOchn('Pavel');

var_dump($studend);
var_dump($studend->isOchn());

?>
