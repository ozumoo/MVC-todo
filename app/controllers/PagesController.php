<?php 
namespace App\Controllers;

class PagesController 
{
	public function home()
	{

		return view('index');
	}
	public function about()
	{
		require view('about');	
	}
	public function contact()
	{
		require view('contact');
	}
}
