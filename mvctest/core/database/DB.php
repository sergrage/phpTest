<?php 

class Connector {

	public static function make($config)
	{
		try{
			return new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['DBName'], $config['user'], $config['password']);
		} catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}
	}
}