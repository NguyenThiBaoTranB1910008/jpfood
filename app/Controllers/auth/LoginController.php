<?php

namespace App\Controllers\auth;

use App\Models\users;
session_start();

class LoginController
{
	public function showLoginForm()
	{	
		view('login');
	}

	public function login()
	{
		$user = users::where('ipname', $_POST['ipname'])
		->where('password', $_POST['inputPassword'])->get();
		if(count($user)==0) {
			echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng!!");</script>';
			view('/login');
		} else {
			$_SESSION['login_user'] = $_POST['ipname'];
			$_SESSION['is_login'] = true;
			header('Location:/');
		}
	}

	public function logout()
	{
		unset($_SESSION['is_login']);
		header('Location:/');
	}

	public function booktale()
    {
        return $this->hasMany(Book::class);
    }

}
