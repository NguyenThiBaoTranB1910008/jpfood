<?php
    namespace App\Controllers\auth;
    require __DIR__. "../../../Views/auth/includes/check_user.php";
    
    use App\Models\cart;
    use App\Models\product;
    
    class CartController{
        
        public function deleteCart(){
            if(isset($_GET['del']) && ($_GET['del'] >= 0)) {
                array_splice($_SESSION['cart'],$_GET['del'],1);
            }
            view('cart', $vars=$_SESSION['cart']);
        }

        public function updateCart(){
            $item = $_POST['item'];
            $_SESSION['cart'][$item][1] = $_POST['update_count'];
            echo '<script>alert("Bạn đã cập nhật số lượng của '.$_SESSION['cart'][$item][0].'");</script>';
            header('Location: /cart');
        }

        public function showCart(){
            if(!login_already()){
                echo('<script>alert("Đăng nhập để tiếp tục!!")</script>');
                view('login');
            }
            else{
                    if(isset($_SESSION['cart'])){
                        view("cart",$vars=$_SESSION['cart']);  
                    }
                    else view('cart');
                }
            }
        


        public function saveCart(){
            $query = cart::orderBy('id_bill','desc')->take(1)->get();
            $count = '';
            $count =$query[0]->id_bill;

            if(empty($count)) {
                $count = 1;
            }else{
                $count++;
            }

            for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
                $name_food=$_SESSION['cart'][$i][0];
                $image_food=$_SESSION['cart'][$i][3];
                $price_food=$_SESSION['cart'][$i][2];
                $count_food=$_SESSION['cart'][$i][1];
                $into_money=(int)$price_food*(int)$count_food;
                $order_address=$_POST['address'];
                $cart_1 = new cart([
                    'name_food' => $name_food,
                    'image_food' => $image_food,
                    'price_food' => $price_food,
                    'count_food' => $count_food,
                    'money_food' => $into_money,
                    'order_address' => $order_address,
                    'id_bill' => $count
                ]);
                $cart_1->save();
            }    
            $_SESSION['cart']=[];
            $_SESSION['is_cart'] = [
                'count' => $count,
                'address' => $_POST['address']
            ];
            $_SESSION['cart_success'] = true;
            header('Location: /cart');
        }
            
    }