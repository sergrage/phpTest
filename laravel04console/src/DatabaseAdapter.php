<?php 

//use PDO;
namespace SomeFolder;

class DatabaseAdapter {

protected $connection;

public function __construct($connection)
{
	$this->connection = $connection;

}

public function fetchAll($tableName)
{
	return $this->connection->query('SELECT * FROM ' . $tableName)->fetchAll();
}

public function addNewTask($tableName, $tasks)
{
	//die(var_dump("INSERT INTO {$tableName}(description) VALUES ({$tasks})"));
	return $this->connection->query("INSERT INTO {$tableName}(description) VALUES ('{$tasks}')");
}

public function completeTaskId($tableName, $id)
{

	return $this->connection->query("DELETE FROM {$tableName} WHERE id='{$id}'");
}

public function query($sql, $parameters)
{
	return $this->connection->prepare($sql)->execute($parameters);
}

}

