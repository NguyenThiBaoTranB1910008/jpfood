<?php
        include "includes/header.php";
        use App\Models\cart;
        if(isset($_SESSION['cart_success'])){
            echo 
            '<script>alert("Bạn đã đặt hàng thành công!")</script>
            <a href="/bill" class="text-center bill">Xem hóa đơn</a>';
            unset($_SESSION['cart_success']);
        }
?>


<div class="cart">
    <h1 id="cart-title">GIỎ HÀNG</h1>
</div>
<div class="container p-4 cart-item">
    <table class="table table-hover">
        <tr>
            <th>STT</th>
            <th>Hình</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá (đ)</th>
            <th>Số lượng</th>
            <th>Thành tiền  (đ)</th>
            <th>Xóa</th>
        </tr>
        <?php
           if(isset($vars)&&(is_array($vars))){
            for ($i=0; $i < sizeof($vars); $i++) { 
                $money = (int)$vars[$i][1] * (int)$vars[$i][2];
                $change_money = asDollars($money);
                $change_price = asDollars((int)$vars[$i][2]);
                echo '
                    <tr>
                        <td class="p-6 text-center">'.($i+1).'</td>
                        <td class="w-300"><img src="'.$vars[$i][3].'" alt="" class="w-300 img-fluid "></td>
                        <td class="p-6 text-center fs-5">'.$vars[$i][0].'</td>
                        <td class="p-6 text-center fs-6">'.$change_price.'</td>
                            
                        <td class="p-5 text-center">
                            <form action="/cart/update" class="mt-2 form-group" method="post">
                                <input type="number" name="update_count" min="1" max="10" class="input_number mb-4" value="'.$vars[$i][1].'">
                                <input type="hidden" value="'.$i.'" name="item">
                                <input type="submit" value="Cập nhật" name="update" class="btn btn-view fs-6">
                            </form>
                        </td>
                        <td class="p-6 text-center fw-bold fs-6">
                            <div>'.$change_money.'</div>
                        </td>
                        <td class="p-6 text-center "><a href="/cart?del='.$i.'" class="btn btn-view">Xóa</a></td>
                    </tr>';
            }
            
            if(empty($vars)){
                echo '
                    <tr>
                        <td colspan="7">
                            <h2 class="text-center text-warning">Giỏ hàng trống! Vui lòng thêm sản phẩm</h2>
                        </td>
                    </tr>';
                }
            }
        ?>
    </table>
    <div class="text-center mt-4 mb-5">
        <a href="/menu"><input type="button" value="TRỞ VỀ MENU" class="me-1 btn btn-view button__text"></a>
    </div>
    <div class="container mt-5 width_cart">
        <h1 class="text-center mt-4 nav-link address fs-2">NHẬP ĐỊA CHỈ NHẬN HÀNG</h1>
        <form action="/cart/save" method="post" class="form-control mb-5">
            <div class="mb-3">
                <input type="text" class="form-control" id="adress" name="address" placeholder="Địa chỉ nhận hàng" required>   
            </div>
            <div class="mb-3 text-center">
                <input type="submit" value="ĐẶT HÀNG" name="agree" class="me-1 btn btn-view">         
            </div>
        </form>
    </div>
</div>
<?php
    include "includes/footer.php";
?>