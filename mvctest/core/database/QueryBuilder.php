<?php 


class QueryBuilder {

	public static function query($pdo, $query)
	{
		$statment = $pdo->prepare($query);
		$statment->execute();
		return $statment->fetchAll();
	}

}