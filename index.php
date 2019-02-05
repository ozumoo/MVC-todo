<?php 
require 'Task.php';
require 'functions.php';


try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=todo_simple','root','123456');
} catch (PDOException $e) {
	die($e->getMessage());
}

$statement = $pdo->prepare('SELECT * FROM todo');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

require 'index.view.php';


