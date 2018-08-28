<?php

class QueryBuilder {

	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	function selectAll($table, $intoClass)
	{
		$statment = $this->pdo->prepare("select * from {$table}");
		$statment->execute();
		return $statment->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}
}



