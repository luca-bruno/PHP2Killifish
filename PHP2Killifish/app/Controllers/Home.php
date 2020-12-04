<?php namespace App\Controllers;

class Home extends BaseController
{
	//http://localhost/php2killifish/php2killifish/public/
	public function index()
	{
		return view('template/home');
		

	}

	// http://localhost/php2killifish/php2killifish/public/home/about
	public function about()
	{
		return view('template/about');
	}

	// http://localhost/php2killifish/php2killifish/public/home/postForm
	public function postForm()
	{
		return view('template/Post_form.html');
	}

	// http://localhost/php2killifish/php2killifish/public/home/login
	public function login()
	{
		return view('template/Login');
	}
	

}
