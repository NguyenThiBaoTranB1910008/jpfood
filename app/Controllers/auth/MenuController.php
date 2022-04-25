<?php
    namespace App\Controllers\auth;
    
    use App\Models\product;
    require __DIR__. "../../../Views/auth/includes/check_user.php";


    class MenuController{

        public function showMenu(){
            // if(!login_already()){
            //     echo('<script>alert("Dang nhap de tiep tuc!!")</script>');
            //     view('login');
            // }
            // else
                view('menu');
        }

        public function saveSession(){
             if(!login_already()){
                echo('<script>alert("Đăng nhập để tiếp tục!!")</script>');
                view('login');
            }
            else{
                if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
                if(isset($_POST['id']) && isset($_POST['count'])){
                    $product = product::where('id', $_POST['id'])->get();
                    $count = $_POST["count"];
                    $update = 0;
                    for ($i=0; $i < count($_SESSION['cart']); $i++) { 
                        if($_SESSION['cart'][$i][4] ==  $_POST['id']) {
                            $update=1;
                            $_SESSION['cart'][$i][1] = (int)$_SESSION['cart'][$i][1] + $count;
                            break;
                        }          
                    }
                    if($update == 0){
                        $product_session = [$product[0]->name, $count, $product[0]->price, $product[0]->image, $product[0]->id];
                        $_SESSION['cart'][] = $product_session;
                    } 
                    echo '<script>alert("Bạn đã thêm '.$product[0]->name.' vào giỏ hàng");</script>';
                }
                
                view('menu');
            }
        }
        
        
    }