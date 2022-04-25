<?php 
include '../mysqli_connect.php';
$query="SELECT *FROM product";
        $result= mysqli_query($dbc,$query);
           

session_start();

if (isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){
        $_session_array_id = array_column($_SESSION['cart'],"id");
        if(!in_array($_GET['id'], $_session_array_id)){
            $_session_array = array(
                'id' =>$_GET['id'],
                'name' => $_POST["name"],
                'price' => $_POST["price"],
                'quantity' => $_POST["quantity"]

    
            );
            $_SESSION['cart'][] = $_session_array;
                }

    }else{
        $_session_array = array(
            'id' =>$_GET['id'],
            'name' => $_POST["name"],
            'price' => $_POST["price"],
            'quantity' => $_POST["quantity"]

        );
        $_SESSION['cart'][]= $_session_array;
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link src="css.css" rel="stylesheet">
</head>

<body style="padding: 0px;">

<div class="products">

 <?php
        include '../public/header.php';
        
        include '../mysqli_connect.php';
        

       
        $query="SELECT *FROM product";
        $result= mysqli_query($dbc,$query);
        ?>
        <h1 style="text-align: center;">Danh sách sản phẩm</h1>
        <div class="cards"> 
        
        <?php
        while ($row = mysqli_fetch_array($result)){?>  
        <div class="card" style="width: 20rem; margin:5px;">
        <form method="post" action="sanpham.php?id=<?=$row['id']?>">
            <div class="wrapper">
                <div class="img">
                         <img src="<?=$row['image']?>" name="image" class="card-img-top"  alt="...">
                        <img src="<?= $row['image2']?>"  class="card-img-top" alt="..." name="imageproduct">
                </div>
            </div>
            
            <div class="card-body">
            
            <h5 class="card-title" name="name" ><?=$row['name']?></h5>
<p class="card-text" name="price"><?=$row['price']?></p>
            <input type="hidden" class="card-title" name="name" value="<?=$row['name']?>">
            <input type="hidden" class="card-title" name="price" value="<?=$row['price']?>">
            <input type="number" name="quantity" class="form-control" value="1">
            
            <br>
            <a href="http://localhost/cart.php"> <input type="submit" name="add_to_cart" class="btn btn-danger btn-block my-2" value="Mua sản phẩm"></a>
            
            
        </div>  
        </div> 
        </form>
        <?php } ?>
    </div>
     
    
    
<br>  
<h1>View cart</h1> 

<form method="post" action="sanpham.php"> 
    <div class="table-responsive">
         
     <table class="table table-bordered table-striped"> 
     

<?php
$output = "";
$output .=" 
<tr> 
  <th>ID</th>
    <th>Name</th> 
    <th>Price</th> 
    <th>Quantity</th> 
    <th>Total Price</th> 
    <th>Action</th>
</tr> 
";
if(!empty($_SESSION['cart'])){
   foreach($_SESSION['cart'] as $key => $value){
       $output.="
       <tr> 
  <td>".$value['id']."</td>
  <td>".$value['name']."</td>
  <td>".$value['price']."</td>
  <td>".$value['quantity']."</td>
  <td>".number_format((int)$value['price']*(int)$value['quantity'],2)."</td>
  
   <td>
   <a href='http://localhost/sanpham.php?action=delete&id=".$value['id']."'>Xóa</a>
 
   </a>
   </td>
</tr> 
       ";
        $total=0;
       $total=$total+($value['price']*$value['quantity']); 
   }
  
   $output.="
   <tr>
   <td colspan='3'></td>
   <td></b>Total Price</b></td>
   <td>".number_format($total)."</td>
   <td >
  
   <a href='http://localhost/sanpham.php?action=clearall'>Clear All</a>
   
   </td>
   </tr>
   ";
}


echo $output;

?>
</div>
</div>
</table>
    <?php
    if(isset($_GET['action'])){
        if($_GET['action']=="clearall"){
            unset($_SESSION['cart']);
        }
    }
    ?>
    <?php
    if(isset($_GET['action'])){
        if($_GET['action']=="delete"){
            unset($_SESSION['cart']);
        }
    }
    ?>

</body>
  <?php include '../public/ft.php';
?>

</html>
<style>
    .wrapper{
        width: 100%;
        overflow: hidden;
    }
    .img{
        display:flex;   
        width: 100%;
        transition: .5s;
    }
    .img:hover{
    transform: translateX(-100%);   
    }
</style>
<?php 
include '../mysqli_connect.php';
$query="SELECT *FROM product";
        $result= mysqli_query($dbc,$query);
           

session_start();

if (isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){
        $_session_array_id = array_column($_SESSION['cart'],"id");
        if(!in_array($_GET['id'], $_session_array_id)){
            $_session_array = array(
                'id' =>$_GET['id'],
                'name' => $_POST["name"],
                'price' => $_POST["price"],
                'quantity' => $_POST["quantity"]
                
    
            );
            $_SESSION['cart'][] = $_session_array;
                }

    }else{
        $_session_array = array(
            'id' =>$_GET['id'],
            'name' => $_POST["name"],
            'price' => $_POST["price"],
            'quantity' => $_POST["quantity"]
            

        );
        $_SESSION['cart'][]= $_session_array;
    }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gio hàng</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css.css"rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

	<body style="padding: 0px;">
  
<?php include '../public/header.php';
?>

<h1>View cart</h1> 

<form method="post" action="cart.php"> 
    <div class="table-responsive">
         
     <table class="table table-bordered table-striped"> 
     

<?php
$output = "";
$output .=" 
<tr> 
  <th>ID</th>
    <th>Name</th> 
    <th>Price</th> 
    <th>Quantity</th> 
    <th>Total Price</th> 
    <th>Action</th>
</tr> 
";
if(!empty($_SESSION['cart'])){
   foreach($_SESSION['cart'] as $key => $value){
       $output.="
       <tr> 
  <td>".$value['id']."</td>
  <td>".$value['name']."</td>
  <td>".$value['price']."</td>
  <td>".$value['quantity']."</td>
  <td>".number_format((int)$value['price']*(int)$value['quantity'],2)."</td>
  
   <td>
   <a href='http://localhost/sanpham.php?action=remove&id=".$value['id']."'>
   <button>Remove</button>
   </a>
   </td>
</tr> 
       ";
    $total=0;
      $total=($total+((int)$value['price']*(int)$value['quantity'])); 
   }
  
   $output.="
   <tr>
   <td colspan='3'></td>
   <td></b>Total Price</b></td>
<td>".number_format($total)."</td>
   <td>
   <a href='http://localhost/sanpham.php?action=clearall'></a>
   <button>Clear All</button>
   </td>
   </tr>
   ";
}


echo $output;

?>
</div>
</div>
</table>
    <?php
    if(isset($_GET['button'])){
        if($_GET['action']=="remove"){
            unset($_SESSION['cart']);
        }
    }
    ?>




</body>
<?php 
include '../public/ft.php' ;
?>

</html>
