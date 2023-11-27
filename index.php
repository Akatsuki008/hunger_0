<?php
session_start();
// echo $_SESSION['user_type'];
// echo $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hunger</title>
    
    <script src="dropdown.js"></script>

    <link rel="stylesheet" href="./style.css" />
  </head>

  <body style="background-color: #f5fccd;">
    <header class="navbar-container">
     
      <?php
      @require 'nav.php';
      @include 'links.php';
      ?>


      
      <div id="Home" class="para">
        <img class="head-img" src="img/head.png" alt="head" />
        <h1 class="head-txt">SIMPLE & BUDGET-FRIENDLY MEAL</h1>
        <p>
          We understand that university-hostel life can be hectic, and finding
          nutritious and affordable meals shouldn't be an added stress. Our
          platform offers a convenient solution, providing you with a variety of
          meal options that cater to your busy schedule and dietary preferences.
          Say goodbye to mealtime stress and hello to a happier, healthier you
          with our expertly crafted meal plans that fuel your academic journey!
        </p>
        <button type="button" class="btn">Know More<i class="fa-light fa-pot-food"></i>
        </button>
      </div>
    </header>

    <section>
    <?php
    @require 'food.php';
    ?>
    </section>
    
    <!-- download -->
    <section class="download" id="download">

      <div class="download-container">
          <div class="download-section-text">
            <h2>Put us in your pocket</h2>
            <button type="button" class="dn-btn btn btn-dark btn-lg pad"><i class="fa-brands fa-apple"></i> Download </button>
            <button type="button" class="dn-btn btn btn-outline-light btn-lg pad"><i class="fa-brands fa-google-play"></i> Download</button>
          </div>
          <div class="download-section-image">
              <img src="./img/mobile2.png" alt="mobile-app" class="rotate">
          </div>
      </div>

    </section>

    <!-- contact -->
    <section id="contact">
      <div class="contact row" style="margin: 3% 5%;">
      <div class=" col-lg-6">
        <h3>LET'S CONNECT WITH US</h3>  
      </div>
    <div  class=" col-lg-6 sub">
      <a href="./signup.php"><button>Subscribe now</button></a>
      <a href="./login.php"><button>Login</button></a>
    </div></div>
    </section>

    <footer class="footer">
      <div class="row help">
        <div class="col-3">
          <img src="./img/food_deli.gif" style="margin-left:60px ; height: 150px;" alt="footer">
        </div>
        <div class="col-3">
          <a href="#">Project</a><br>
          <a href="#">Download</a><br>
          <a href="#">All Versions</a></div>
          <div class="col-3">
        <a href="#">Community</a><br>
        <a href="#">GitHub</a><br>
        <a href="#">Twitter</a>
      </div>
        <div class="col-3">
        <a href="#">Help</a><br>
        <a href="#">Support</a><br>
        <a href="#">Contact Us</a>
      </div>
      </div>
      <p>©2023HUNGER|All rights Reserved</p>
    </footer>
    
  </body>
</html>
