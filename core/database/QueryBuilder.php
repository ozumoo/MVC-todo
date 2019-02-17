<?php 
class QueryBuilder 
{
	protected $pdo;

	function __construct($pdo)
	{
		$this->pdo = $pdo 	;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$table}");
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS );
	}
	public function insert($table , $params)
	{
		$sql = sprintf(
			'insert into %s (%s) value (%s)', 
			$table ,
			implode(', ', array_keys($params)) ,
			':'  . implode(', ;', array_keys($params))
		);
		try { 
			$statement = $this->pdo->prepare($sql);


			$statement->execute($params);
		} catch(Exception $e) {
			die('Whoops');
		}
	}
}
