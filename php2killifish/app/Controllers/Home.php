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
		return view('template/Login_page.html');
	}

	// http://localhost/php2killifish/php2killifish/public/home/signUp
	public function signUp()
	{
		return view('template/Sign_up.html');
	}
		
	// http://localhost/php2killifish/php2killifish/public/home/community
	public function community()
	{
		return view('template/Community.html');
	}

	// http://localhost/php2killifish/php2killifish/public/home/updatePage
	public function updatePage()
	{
		return view('template/Update_page.html');
	}

	// http://localhost/php2killifish/php2killifish/public/home/updateShow
	public function updateShow()
	{
		return view('template/Update_show.html');
	}

}
