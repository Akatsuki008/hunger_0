<?php
@include 'config.php';
@include 'links.php';

if(!isset($_SESSION["user_type"]) || $_SESSION["user_type"] != "User")
{
    header('location: login.php');
    die();
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User</title>
  <link href="./admin.css" rel="stylesheet">
  <link href="./food.css" rel="stylesheet">

</head>

<body>
<?php
@require 'admin_nav.php';
?>
  
<div class="d-flex">
<?php
@require 'user_sidebar.php';
?>
<div>
<main id="user_dash" class="user_dash">

<div style="padding: 20px 30px;">
    <h2>Dashboard</h2>
    <div>
    <a href="user.php">Home </a>/ Dashboard
    </div>
    </div>
<div>

<div class="art-board">
               <div class="art-board__container">

                     <?php

                      $query = "SELECT * FROM food_menu";
                      $data = mysqli_query($conn, $query);
                      $res= mysqli_num_rows($data);
                      

                      if($res)
                      {
                        while($row = mysqli_fetch_array($data))
                        {
                          ?>
                            <div class="card mx-3">

                        <div class="card__image">
                        <img src="./<?php echo $row['Img'] ?> " alt="">
                     </div>
                     <div class="card__info">
                        <div class="car__info--title">
                           <h3><?php echo $row['Name'] ?></h3>
                           <p><?php echo $row['Description'] ?></p>
                        </div>
                        <div class="card__info--price">
                           <p><?php echo $row['Price'] ?></p>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>

                        </div>

                     </div><a href="order.php?food_id=<?php echo $row['ID'];?>"><button type="button" class="btn btn-danger w-100">Order</button></a></div>
                          <?php
                        }
                      }
                      ?>
                      

                  </div>
                </div>

</div>
</main>
</div>
</div>
  

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Hunger</span></strong>. All Rights Reserved
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
</body>
</html>
