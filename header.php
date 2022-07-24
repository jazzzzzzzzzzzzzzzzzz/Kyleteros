<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kyleteros</title>


  <!--Bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--Carousel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--FontAwesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="style.css">
  <?php

  //require functions.php file
  require('functions.php')

  ?>




  <!--Navbar-->

  <!--Navbar-->




</head>

<body>


    <!--Header-->
    <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
      <?php
  if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {

  ?>
        <p class="font-rale font-size-12 text-black-50 m-0">
          
        <strong>Welcome <?php echo $_SESSION['first_name']; ?>!</strong>
        </p>

      <?php
    }
      ?>
      <div class="font-rale font-size-14">
        <a href="admin/crudProduct/crudProduct.php" class="px-3 border-left text-dark">Admin</a>
        <a href="account/profile.php" class="px-3 border-left text-dark">Profile</a>
        <a href="account/login.php" class="px-3 border-right border-left text-dark">Login</a>
        <a href="account/register.php" class="px-3 border-right text-dark">Register</a>
        <a href="account/logout.php" class="px-3 border-right text-dark">Logout</a>
        <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
      </div>
      </div>

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Kyleteros</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
              <li class="nav-item">
                <a class="nav-link active" href="#">On Sale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
              </li>
            </ul>
            <form action="#" class="font-size-14 font-rale mt-3">
              <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light" style="margin-bottom: 20px;"><?php echo count($product->getData('cart')) ?></span>
              </a>
            </form>
          </div>
        </div>
      </nav>
      <!--Navbar-->


    </header>


    <!--Header-->

    <!--Main-->
    <main id="main-site">