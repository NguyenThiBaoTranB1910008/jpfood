<?php

    include ("includes/header.php");
    if(isset($_SESSION['name_already'])){
      echo '<script>alert("Ten tai khoan da ton tai. Vui long su dung lua chon khac!!");</script>';
      unset($_SESSION['name_already']);
   }
   else if(isset($_SESSION['email_already'])){
         echo '<script>alert("Email da ton tai. Vui long su dung lua chon khac!!");</script>';
         unset($_SESSION['email_already']);
   }
?>
<div class="container-fluid p-5">
      <div class="row m-5 form-border">
         <div class="col-8 login">
         <h1 class="text-center title">Đăng ký</h1>
            <form method="post" action="/signup" id="signup" class="p-3">
               <div class="form-group row">
                  <label for="name" class="col-sm-3 col-form-label">Tên tài khoản</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="name" name="name" placeholder="Tên tài khoản">
                  </div>
               </div>
               <div class="form-group row py-2">
                  <label for="inputPassword" class="col-sm-3 col-form-label">SĐT</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="phone" name="phone" placeholder="Số Điện Thoại">
                  </div>
               </div>

               <div class="form-group row py-2">
                  <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                     <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                  </div>
               </div>
               <div class="form-group row py-2">
                  <label for="inputPassword" class="col-sm-3 col-form-label">Mật khẩu</label>
                  <div class="col-sm-9">
                     <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
                  </div>
               </div>
               <div class="form-group row py-2">
                  <label for="inputPassword" class="col-sm-3 col-form-label">Nhập lại mật khẩu</label>
                  <div class="col-sm-9">
                     <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu">
                  </div>
               </div>
               <div class="row py-3">
                  <div class="col-sm-5"></div>
                  <div class="col-sm-7 p-3">
                     <button type="submit" class="btn btn-view gradient-butto">Đăng ký</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-4 signup center">
            <div class="div text-center">
                <img src="css/images/signup.png" alt="" id="signup-img" class="img-fluid">
               <h1 class="form-title">Welcome !</h1>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="js/script.js"></script>
<?php
    include ("includes/footer.php");	
?>