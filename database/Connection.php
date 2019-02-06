<?php

class Connection 
{
	public static function make() 
	{
 		try {
 			return $pdo = new PDO('mysql:host=127.0.0.1;dbname=todo_simple','root','123456');
 		} catch (PDOException $e) {
 			die($e->getMessage());
 		}
	}
}
