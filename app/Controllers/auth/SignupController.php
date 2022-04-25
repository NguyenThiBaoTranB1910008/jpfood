<?php

namespace App\Controllers\auth;
session_start();

use App\Models\users;

class SignupController
{
	public function showSignupForm()
	{
		view('signup');
	}

	public function signup()
	{
        $name_already= users::where('ipname',$_POST['name'])->get();
        $email_already= users::where('email',$_POST['email'])->get();
        if(count($name_already)!=0){
            $_SESSION['name_already']=true;
            header('Location: /signup');
        }
        else if(count($email_already)!=0){
            $_SESSION['email_already']=false;
            header('Location: /signup');
        }
        else{
            $user= new users();
            $user->ipname=  $_POST['name'];
            $user->SDT=  $_POST['phone'];
            $user->email=  $_POST['email'];
            $user->password=  $_POST['password'];
            $user->save();
            echo '<script>alert("Chúc mừng bạn đã đăng ký thành công!!");</script>';
            view('login');
        }
	}

}
