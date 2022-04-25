 <?php
  // session_start();
  function logout(){
    unset($_SESSION['is_login']);
    unset($_SESSION['login_user']); 
  }

  if(isset($_GET['out'])){
    logout();
  }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JPFood</title>
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style8.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
</head>
<body>
  <header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm p-0">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img id="logo" class="img-fluid" src="css/images/logo.png" alt="">
            <p id='logoname' class="px-2 mt-1 mb-0">JP FOOD</p> </a>
              <ul class="nav navbar-nav navbar-right">
                <li class='nav-item'><a href="/" class='nav-link dt'>Trang chủ</a></li>
                <li class='nav-item'><a href="/menu" class='nav-link dt'>Menu</a></li>
                <li class='nav-item'><a href="/login" class='nav-link'>Đăng ký/Đăng nhập</a></li>
                <li class='nav-item'><a href="/booktable" class='nav-link'>Đặt bàn</a></li>
                <li class='nav-item'><a href="/out" class='nav-link'>Đăng xuất</a></li>
                <li class='nav-item'><a href="/icon" class='nav-link'><i class="fa-solid fa-cart-shopping fs-5"></i></a></li>
              </ul>
            </div>
        </nav>
    </div>
  </header>