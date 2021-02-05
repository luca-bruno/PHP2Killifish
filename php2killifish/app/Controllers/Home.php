<?php namespace App\Controllers;

class Home extends BaseController
{
	// http://localhost/php2killifish/php2killifish/public/
	public function index()
	{
		echo view('templates/header');
		echo view('home');
		echo view('templates/footer');
	}

	// http://localhost/php2killifish/php2killifish/public/about
	public function about()
	{
		echo view('templates/header');
		echo view('about');
		echo view('templates/footer');
	}
}
