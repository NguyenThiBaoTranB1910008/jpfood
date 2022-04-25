<?php
    include ("includes/header.php");
    use App\Models\booktable;
    use App\Models\users;	
?>

<!-- Form đặt bàn -->
<div class="container pt-5 px-5">
    <form action="/booktable" method="post" id="booktable" class="form-border p-5 m-5">
        <h1 class="text-center title">ĐẶT BÀN</h1>
        <div class="form-group">
            <label for="fullname">Người đặt:</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ tên khách hàng">
        </div>
        <div class="form-group">
            <label for="date">Ngày đặt:</label>
            <input type="text" class="form-control" id="datebook" name="datebook" placeholder="vd: 2001-11-29">
        </div>
        <div class="form-group">
            <label for="time">Thời gian đặt:</label>
            <input type="text" class="form-control" id="timebook" name="timebook" placeholder="vd: 20:11:00">
        </div>
        <div class="seating form-group">
            <h2>Loại bàn:</h2>
            <article class="feature">
               <input type="radio" value="đơn" name="seating" id="feature1"/>
                <div class="center">
                    <span style="text-align: center; " >
                    Đơn<br/>
                    - 1 người>
                </div>
            </article>
                
            <article class="feature">
                <input type="radio" value="tình nhân" id="feature2" name="seating"/>
                <div class="center">
                <span style="text-align: center; " >
                Tình nhân<br/>
                    - 2 người
                </span>
            </div>
            </article>
                    
                    <article class="feature">
                        <input type="radio" value="gia đình" id="feature3" name="seating" />
                        <div class="center">
                        <span style="text-align: center;">
                        Gia đình<br/>
                            - 5 người
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="radio" value="tiệc tùng" id="feature4"  name="seating" />
                        <div class="center">
                        <span style="text-align: center; " >
                            Tiệc tùng<br/>
                            - 5+ người
                        </span>
                        </div>
                    </article>
                </div>
                <div class="specialOccasion form-group">
                    <h2>Dịp đặt biệt</h2>
                    <article class="feature">
                        <input type="radio" value="kỉ niệm" id="aniversary" name="occasion" />
                        <div class="center">
                            <span style="text-align: center; " >
                            Lễ kỉ niệm
                        </span>
                        </div>
                    
                    </article>
                    
                    <article class="feature">
                        <input type="radio" value="sinh nhật" id="birthday" name="occasion" />
                        <div class="center">
                        <span style="text-align: center; " >
                        Sinh nhật
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="radio" value="hẹn hò" id="date" name="occasion" />
                        <div class="center">
                        <span style="text-align: center;">
                         Hẹn hò
                        </span>
                        </div>
                    </article>
                    
                    <article class="feature">
                        <input type="radio" value="ăn uống" id="meeting"  name="occasion" />
                        <div class="center">
                        <span style="text-align: center; " >
                         Ăn uống
                        </span>
                        </div>
                    </article>
                </div>
                <div class="additionalNotes">
                    <h2>Ghi chú:</h2>
                    <textarea id="" cols="100" rows="10" name="note"></textarea>
                </div>
                <input  type="submit" class="btn btn-view mt-4" id="bookTablebtn"  value="Đặt bàn" >
    </form>
</div>
<!-- Form đặt bàn -->
    <!-- Modal -->
    <button type="button" class="btn btn-info btn-lg btn btn-view m-3" data-toggle="modal" data-target="#myModal">Xem danh sách bàn đã đặt</button>

    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="max-width:600px">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Danh sách đặt bàn</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <td style="width:150px">Tên</td>
                        <td style="width:150px">Ngày đặt</td>
                        <td style="width:90px">Giờ đặt</td>
                        <td style="width:90px">Loại bàn</td>
                        <td style="width:130px">Dịp đặt biệt</td>
                        <td style="width:100px">Ghi chú</td>
                        <td style="width:20px">Hủy</td>
                    </tr>
                    <?php
                        $user= $_SESSION['login_user'];
                        $tables =booktable::where('user', $_SESSION['login_user'])->get();
                        foreach ($tables as $table) {
                            echo "<tr>
                                <td>".$table['fullname']."</td>
                                <td>".$table['datebook']."</td>
                                <td>".$table['timebook']."</td>
                                <td>".$table['seating']."</td>
                                <td>".$table['occasion']."</td>
                                <td>".$table['note']."</td>
                                <td class='text-center'><a id=".$table['id']." class='fa-solid fa-trash-can huydon' href='/booktable/del?idhuy=".$table['id']."'></a></td>
                                </tr>";
                            };
                    ?> 
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
    </div>
<script src="js/script.js"></script>
<?php
    include ("includes/footer.php");
?> 

   	