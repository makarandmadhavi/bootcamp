<?php include "backend/getproducts.php"; ?>
<?php
session_start();

if(isset($_GET['category'])){
  $category = $_GET['category'];
  //$products = getproductsbycategory($category);
}else{
  $category='Our Products';
  //$products = getallproducts();
}
  
?>

<?php include "backend/onlyuser.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>BootKart</title>
    <link rel="shortcut icon" type="image/png" href="../booticon.ico"/>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="index.php">Bootkart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php 
  $categories = getcategories();
  //print_r($categories); 
  ?>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php foreach($categories as $cat){ ?>  
      <li class="nav-item" >
        <a class="nav-link" href="index.php?category=<?=$cat['category']?>" > <?=$cat['category']?> </a>
      </li>
      <?php } ?>
      <!-- <li class="nav-item">
        <a class="nav-link" href="index.php?category=TVs"> TVs </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?category=Laptops"> Laptops </a>
      </li> -->
     
     
    </ul>
      <?php if(isset($_SESSION['username'])){ ?>
      <a href="cart.php"><button class="btn btn-outline-success my-2 mx-2 my-sm-0" >Cart</button></a>
      <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" >Logout</button></a>
      <?php }else{ ?>
      <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" >Login</button></a>
      <?php } ?>
  </div>
</nav>