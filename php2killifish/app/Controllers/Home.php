<?php namespace App\Controllers;

class Home extends BaseController
{
	// http://localhost/php2killifish/php2killifish/public/
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
		return view('template/postForm');
	}

	// http://localhost/php2killifish/php2killifish/public/home/login
	public function login()
	{
		return view('template/loginPage');
	}

	// http://localhost/php2killifish/php2killifish/public/home/signUp
	public function signUp()
	{
		return view('template/signUp');
	}
		
	// http://localhost/php2killifish/php2killifish/public/home/community
	public function community()
	{
		return view('template/community');
	}

	// http://localhost/php2killifish/php2killifish/public/home/updatePage
	public function updatePage()
	{
		return view('template/updatePage');
	}

	// http://localhost/php2killifish/php2killifish/public/home/updateShow
	public function updateShow()
	{
		return view('template/updateShow');
	}

	// http://localhost/php2killifish/php2killifish/public/home/viewPost
	public function viewPost()
	{
		return view('template/viewPost');
	}


}
