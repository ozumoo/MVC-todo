<?php 

function dd($val) {
	echo "<pre>";
	die(var_dump($val));
	echo "</pre>";
}

function connectToDb()
{
	try {
		return $pdo = new PDO('mysql:host=127.0.0.1;dbname=todo_simple','root','123456');
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}


function fetchAllTasks($pdo)
{
	$statement = $pdo->prepare('SELECT * FROM todo');

	$statement->execute();

	return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
}
