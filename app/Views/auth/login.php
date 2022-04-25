<?php
include("includes/header.php");
?>
   <div class="container-fluid p-5">
      <div class="row m-5 form-border">
         <div class="col-8 bg" id="login">
            <form class="login" method="post" action="/login" class="p-3">
               <h1 class="text-center p-4 title">Đăng nhập</h1>
               <div class="form-group row ">
                  <label for="ipname" class="col-sm-3 col-form-label">Tên đăng nhập</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="ipname" name="ipname">
                  </div>
               </div>
               <div class="form-group row py-2">
                  <label for="inputPassword" class="col-sm-3 col-form-label">Mật khẩu</label>
                  <div class="col-sm-9">
                     <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                  </div>
               </div>   
               <div class="row py-3">
                  <div class="col-sm-5"></div>
                  <div class="col-sm-7 p-1">
                     <button type="submit" class="btn btn-view gradient-butto">Đăng nhập</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-4 signup center">
            <div class="div text-center">
               <h1 class="form-title">Xin chào!!</h1>
               <h3 class="text-white">Bạn chưa có tài khoản?</h3>
               <a href="/signup" class="btn btn-view">Đăng ký ngay</a>
            </div>
         </div>
      </div>

   </div>
<?php
   include ("includes/footer.php")
?>