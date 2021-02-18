<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/recyclus.png" />


        <title> WELCOME | RECYCLUS </title>
  <meta charset="utf-8" />


  <title>Recyclus</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet" href="css/styles.css" />

  <!-- Google Fonts -->

<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">

  


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>

<body>

  <section id="title">

    <div class="container-fluid1">

      <nav class="navbar navbar-expand-md navbar-dark">

        <a class="navbar-brand" href="index.php">RECYCLUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_us.php">Contact us</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="row">

        <div class="col-lg-6">
          <h1>CHANGING FUTURE ONE STEP AT A TIME.</h1>
          <a  href="products.php" type="button" class="btn btn-dark btn-lg download-button"><i class="fas fa-shopping-bag"></i> Buy waste</button></a>
          <a href="sell.php"  type="button" class="btn btn-outline-light btn-lg download-button"><i class="far fa-money-bill-alt"></i> Sell waste</button></a>
          <!--<i class="fas fa-store"></i>-->
        </div>
        <div class="col-lg-6">
          <img src="img/recycle.jpg" alt="recycle-png" class="margin ml-auto" />
        </div>
      </div>

    </div>



  </section>

  <section id="car">



    <div id="car-carousel" class="carousel slide" data-ride="false">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <h2>For every 1 million cell phones that are recycled, 35,274 lbs of copper, 772 lbs of silver, 75 lbs of gold, and 33 lbs of palladium can be recovered.</h2>
        </div>

        <div class="carousel-item">
          <h2>It takes 530 lbs of fossil fuel, 48 lbs of chemicals, and 1.5 tons of water to manufacture one computer and monitor.</h2>
        </div>

        <div class="carousel-item">
          <h2>20 to 50 million metric tons of e-waste are disposed worldwide every year.</h2>
        </div>

        <div class="carousel-item">
          <h2 class="car-text">Cell phones and other electronic items contain high amounts of precious metals like gold or silver. Americans dump phones containing over $60 million in gold/silver every year.</h2>
        </div>

      </div>

      <a class="carousel-control-prev" href="#car-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#car-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

  </section>

  <section id="cards">

    <div class="container-fluid ">
      <h2 class="cen" style="color: white; padding-bottom: 2%;"> Choose an option.</h2>
      <hr style="width: 15%; margin-bottom: 60px; background-color: white; height:2px;" />

      <div class="card-deck">

        <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-4">
            <div class="card" style="padding-top: 0; border: 0;">
              <img src="img/sell.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">I want to buy waste.</h5>
                <a href="products.php" type="button" class="btn btn-outline-success btn-lg hov">Buy waste.</a>
              </div> 
            </div>
          </div>
          <div class="col mb-4">
            <div class="card" style="padding-top: 0; border: 0;">
              <img src="img/sell2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">I want to sell waste.</h5>
                <a href="sell.php" type="button" class="btn btn-outline-success btn-lg " >Sell waste.</a>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

</section>
<section class="foo">
    <div class='container-fluid'>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <a class="navbar-brand" href="#" style="color: white; margin-bottom: 30px;">RECYCLUS</a>
        </div>

        <div class="col-lg-6 col-md-6">

          <a href="https://twitter.com/login?lang=en" style="text-decoration: none; color: white; "><i class="fab fa-twitter fa-3x"></i></a>
          <a href="https://www.instagram.com/" style="text-decoration: none; color: white; margin-left: 20px;" ><i class="fab fa-instagram fa-3x" ></i></a>
          <a href="https://www.facebook.com/" style="text-decoration: none; color: white; margin-left: 20px;"><i class="fab fa-facebook fa-3x" ></i></a>
</div>
    </div>
  </section>
</body>

</html>
