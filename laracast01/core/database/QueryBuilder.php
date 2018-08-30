<?php



class QueryBuilder {

	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table, $intoClass)
	{
		$statment = $this->pdo->prepare("select * from {$table}");
		$statment->execute();
		return $statment->fetchAll(PDO::FETCH_CLASS, $intoClass);
	}

	public function insertAll($table, $parametrs)
	{
		$sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', 
					$table,
					implode(' ,', array_keys($parametrs)),
					':' . implode(' , :', array_keys($parametrs)));
		
		$statment = $this->pdo->prepare($sql);
		$statment->execute($parametrs);
		//$statment = $this->pdo->prepare("INSERT INTO {$table} (description, completed) VALUES ( '{$values['description']}', {$values['completed']})");
		
	}
}



