
<?php
@include 'links.php';
?>
<link rel="stylesheet" href="./admin.css">
<script src="./dropdown.js"></script>

<body >
  <nav style="height: 120px;">
  <div class="d-flex align-items-baseline justify-content-between">
  <div class="d-flex">
    <div>
      <a style="border: 0" href="./index.php"><img src="./img/logo.png" alt=""></a>
      </div>
      <!-- <div>
       <form action="" class="d-flex">
            <input class="search" type="text" placeholder="Search">
          <button name="srch_val" class="srch_btn"><i class="fa-sharp fa-solid fa-magnifying-glass" style="color: #892006;"></i></button>
      </form>
        </div> -->
        </div>
      <div class="d-flex Profile">
        <img src="./img/admin.png" alt="" style="height: 40px;" class="">
              <span style= "padding-top: 10px;"><?php
              echo 'Hello, ' ;
              echo $_SESSION['name'];
              ?></span>
             <a style="padding:10px 40px 0; border: 0; color: brown" href="./logout.php">Sign Out</a>
      </div>
  </nav>
</body>
