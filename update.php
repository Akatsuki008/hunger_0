<?php
@include 'config.php';
$id = $_GET['id'];
$query = "SELECT * FROM food_menu WHERE ID = '$id'";
$data = mysqli_query($conn, $query);
$row = mysqli_fetch_array($data);
?>
<?php
@require 'admin_nav.php';
?>
<link rel="stylesheet" href="./admin.css">
<body>
<div class="d-flex">
<?php
@require 'user_sidebar.php';
?>

    <div class="food_edit_form"> 
    <h1>Edit Menu</h1>
<form action="update.php?id=<?php echo $row['ID'];?>" method="POST">  
                <label style="margin-right: 24px;" for="">Food Type: </label>
                <input type="text" value="<?php echo $row['Type'] ?>" name="type" id = "type"><br>
                <label style="margin-right: 16px;" for="f_name">Food Name: </label>
                <input type="text" value="<?php echo $row['Name'] ?>" name="name" id = "name"><br>
                <label style="margin-right: 14px;" for="Description">Description: </label>
                <input type="text" value="<?php echo $row['Description'] ?>" name="des" id = "des"><br>
                <label style="margin-right: 66px;" for="Price">Price</label>
                <input type="text" value="<?php echo $row['Price'] ?>" name="price" id = "price"><br>
                <label style="margin-right: 60px;" for="img">Image</label>
                <input type="text" value="<?php echo $row['Img'] ?>" name="img" id = "img"><br>
                <input type="hidden" value="<?php echo $row['ID'] ?>" name="id" >
                <input class="login-btn" type="submit" value="Update" name= "update">
                <img src="./img/banana.gif" alt="" style="padding-left: 10px; height: 80px;">
            </form>
</div>
</div>
</body>
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Hunger</span></strong>. All Rights Reserved
    </div>
  </footer>


<?php
if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $des = $_POST['des'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $id = $_POST['id'];

    $up_query = "UPDATE food_menu SET Name='$name', Description = '$des', Price='$price', Img='$img' WHERE ID ='$id'";
    $up_data = mysqli_query($conn, $up_query);


    if($up_data)
    {
        ?>
        <script type="text/javascript">
            alert("Data updated!");
            window.open("http://localhost/hunger/admin_dash.php", "_self");
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Try again!");
            window.open("http://localhost/hunger/admin_dash.php", "_self");
        </script>
        <?php
    }
}
?>