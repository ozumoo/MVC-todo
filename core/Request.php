<?php 
namespace App\Core;

class Request 
{
	public static function uri()
	{
		//in case we have params
		return trim(
			parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH ) , '/'
		) ; 
	}
	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

}
