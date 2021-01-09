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

	// // http://localhost/php2killifish/php2killifish/public/postSubmit
	// public function postSubmit()
	// {
	// 	echo view('templates/header');
	// 	echo view('postSubmit');
	// 	echo view('templates/footer');
	// }

	// http://localhost/php2killifish/php2killifish/public/community
	public function community()
	{
		echo view('templates/header');
		echo view('community');
		echo view('templates/footer');
	}

	// http://localhost/php2killifish/php2killifish/public/updates
	public function updates()
	{
		echo view('templates/header');
		echo view('updates');
		echo view('templates/footer');
	}

	// http://localhost/php2killifish/php2killifish/public/updateSubmit
	// public function updateSubmit()
	// {
	// 	echo view('templates/header');
	// 	echo view('updateSubmit');
	// 	echo view('templates/footer');
	// }

	// // http://localhost/php2killifish/php2killifish/public/updateDisplay
	// public function updateDisplay()
	// {
	// 	echo view('templates/header');
	// 	echo view('updateDisplay');
	// 	echo view('templates/footer');
	// }

	// http://localhost/php2killifish/php2killifish/public/postDisplay
	public function postDisplay()
	{
		echo view('templates/header');
		echo view('postDisplay');
		echo view('templates/footer');
	}


}
