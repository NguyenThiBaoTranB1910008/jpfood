<?php

namespace App\Controllers\auth;

use App\Models\booktable;
use App\Models\user;
require __DIR__. "../../../Views/auth/includes/check_user.php";
use App\Controllers\Controller;


class BooktableController extends Controller
{
	public function showBooktableForm()
	{
        if(!login_already()){
            echo('<script>alert("Đăng nhập để tiếp tục!!")</script>');
            view('login');
        }
        else
		    view('booktable');
	}

    public function saveForm(){
        $user = $_SESSION['login_user'];
        $table= new booktable();
        $table->user=$user;
        foreach ($_POST as $key => $value) {
			$table->$key = $value;
		}
        $table->save();
        echo '<script>alert("Cảm ơn bạn đã đặt bàn!!")</script>';
        view('booktable');
    }
    
    public function deleteTable(){
        booktable::where("id",$_GET['idhuy'])->delete();
        header("Location: /booktable");
    }
}
