<?php
@include 'config.php';


if(!isset($_SESSION["user_type"]) || $_SESSION["user_type"] != "Admin")
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

  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="./food.css">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="admin.css" rel="stylesheet">


</head>

<body>
     <?php
     require 'admin_nav.php';
     ?>

  <div class="d-flex">

    <?php
    require 'admin_sidebar.php';
    ?>

  <main id="main" class="main">
    <div style="padding: 20px 30px;">
    <h2>Dashboard</h2>
    <div>
    <a href="admin_dash.php">Home </a>/ Dashboard
    </div>
    </div>
 
    <!-- sales -->
    <section class="section dashboard">
          <div class="row">
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Revenue -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cash"></i>
                    </div>
                    <div class="ps-3">
                      <h6>৳53,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Customers -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div id="Menu" class="dashboard top_sell">
                <div class="top-selling">
                    <h5>Menu</h5>
  
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Preview</th>
                          <th>Item</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th colspan="2" style="text-align: center;">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
              
                          <?php
                          $query = "SELECT * FROM food_menu";
                          $data = mysqli_query($conn, $query);
                          $res= mysqli_num_rows($data);
                          if($res)
                          {
                            while($row = mysqli_fetch_array($data))
                            {
                              ?>
                              <tr style="color: brown;">
                          <th scope="row"><a href="#"><img src="./<?php echo $row['Img'] ?> " alt=""></a></th>
                          <td ><?php echo $row['Name'] ?> </td>
                          <td ><?php echo $row['Description'] ?> </td>
                          <td ><?php echo $row['Price'] ?> </td>
                          <td><a href="update.php?id=<?php echo $row['ID'];?>"><button type="button" style="color:white; background-color: brown" class="btn">Edit</button></a></td>
                          <td><a onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['ID'];?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
                           </tr>
                              <?php
                            }
                          }
                          ?>
                      </tbody>
                    </table>
             </div>
          </div>

          <div id="Menu" class="dashboard top_sell">
                <div class="top-selling">
                    <h5>Order List</h5>
  
                    <table class="table">
                      <thead>
                        <tr>
                          <!-- <th>Preview</th> -->
                          <th>Food</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Ordered By</th>
                          <th>Address</th>
                          <th colspan="2" style="text-align: center;">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
              
                          <?php
                          $query = "SELECT * FROM order_list";
                          $data = mysqli_query($conn, $query);
                          $res= mysqli_num_rows($data);
                          if($res)
                          {
                            while($row = mysqli_fetch_array($data))
                            {
                              ?>
                              <tr style="color: brown;">
                          <!-- <th scope="row"><a href="#"><img src="./<?php echo $row['Img'] ?> " alt=""></a></th> -->
                          
                          <td ><?php echo $row['food_name'] ?> </td>
                          <td ><?php echo $row['quantity'] ?> </td>
                          <td ><?php echo $row['price'] ?> </td>
                          <td ><?php echo $row['user_name'] ?> </td>
                          <td ><?php echo $row['addres'] ?> </td>
                          
                          <td><button class="btn btn-success">Sent</button></td>
                          <td><a onclick="return confirm('Are you sure?')" href="delete_orderlist.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
                           </tr>
                              <?php
                            }
                          }
                          
                          ?>
                      </tbody>
                    </table>
             </div>
          </div>
    </section>

  </main>
</div>

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Hunger</span></strong>. All Rights Reserved
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>