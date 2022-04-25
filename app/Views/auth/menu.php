<?php
include ("includes/header.php");
use App\Models\product;
?>

<div class="menu">
    <h1 id="menu-title">MENU</h1>
</div>
    <div class="menu_1">
        <div class="row">
       <?php
            $menus = product::all();
            foreach($menus as $menu) {
                $price_new = asDollars($menu->price);
                echo '
                    <div class="col-4 pb-4">
                    <img src="'.$menu->image.'" alt="" class="img_menus img-fluid  img-thumbnail">
                    <div class="text-center">
                        <h5 class="fs-4">'.$menu->name.'</h5>
                        <p class="fs-4">'.$price_new.'đ</p>
                        <form action="/order" method="post" id="menu_form">
                            <input type="number" name="count" min="1" max="10" value="1" class="mb-3 me-4 input_number">
                            <input type="hidden" name="id" value="'.$menu->id.'">
                            <div class="btn btn-view mb-2 pb-2">
                                <i class="fa-solid fa-cart-plus"></i>
                                <input type="submit" name="addcart" value="Thêm vào giỏ hàng" class="btn-text">
                            </div>
                        </form>
                    </div>   
                </div>
                ';
            }
            ?>
       </div>    
    </div>
<?php
include "includes/footer.php";
?>