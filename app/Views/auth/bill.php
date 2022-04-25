<?php
    include "includes/header.php";
    // session_start();
    use App\Models\cart;
    use App\Models\users;
?>
<body>
    <div id="hi" class="container mt-8">
        <div class="row">
            <div class="col-3">
                <img src="./css/images/logo.png" alt="" class="img-fluid ">
            </div>
            <div class="col-9">
                <small>Địa chỉ: Đường 3/2, Xuân Khánh, Ninh Kiều, Cần Thơ
                <br>Holine: 0909 89 12 62
                </small>
                <h5 class="text-center fs-3">HÓA ĐƠN</h5>
            </div>
        </div>
        <table>
            <tr>
                <td style="width: 50px;">STT</td>
                <td style="width: 150px;">Tên món ăn</td>
                <td style="width: 100px;">Đơn giá(đ)</td>
                <td style="width: 100px;">Số Lượng</td>
                <td style="width: 150px;">Thành tiền(đ)</td>
            </tr>
            <?php
                $vars = cart::where('id_bill', $_SESSION['is_cart']['count'])->get();
                $sdt = users::where('ipname', $_SESSION['login_user'])->get();
                $sum=0;
                if(isset($vars)){
                    for($i=0;$i<sizeof($vars);$i++){
                        $new_price = asDollars($vars[$i]->price_food);
                        $new_money = asDollars($vars[$i]->money_food);
                        $sum += $vars[$i]->money_food;
                        echo '<tr>
                                <td class="text-center">'.($i+1).'</td>
                                <td class="pt-6 text-center">'.$vars[$i]->name_food.'</td>
                                <td class="pt-6 text-center">'.$new_price.'</td>
                                <td class="pt-6 text-center">'.$vars[$i]->count_food.'</td>
                                <td class="pt-6 text-center fw-bold fs-6">'.$new_money.'</td>
                            </tr>';
                    }
                }else{
                    echo 
                    '<tr>
                        <td colspan="5" class="text-center text-warning fs-4">Vui lòng đặt hàng trước khi xem hóa đơn</td>
                    </tr>';
                }
                
            ?>
            <tr>
                <td colspan="5" class="right">Tổng thành tiền:<?php echo asDollars($sum);?></td>
            </tr>
            <tr>
                <td colspan="5" class="right">Khuyến mãi: 0%</td>
            </tr>
            <tr>
                <td colspan="5" class="right">Thanh toán: <?php echo asDollars($sum); ?>đ</td>
            </tr>
        </table>
        <p class="mt-3">Tên khách hàng: <?php echo $_SESSION['login_user'];?></p>
        <p>Địa chỉ nhận hàng: <?php echo $_SESSION['is_cart']['address'];?></p>
        <p>Liên lạc: <?php echo $sdt[0]->SDT;?></p>
</div>
</body>