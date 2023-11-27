<?php
@include 'config.php';
@include 'links.php';
@include 'admin_nav.php';
if(isset($_POST['order']))
{
    
    $food_id = $_POST['food_id'];
    $food_name=$_POST['food'];
    $add = $_POST['address'];
    $quantity = $_POST['quantity'];
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['name'];
    $price = $_POST['price'];
    $price = $price*$quantity;

    $query = "INSERT INTO order_list (menu_id, food_name, addres, quantity, user_id, user_name, price) VALUES ('$food_id','$food_name', '$add','$quantity','$user_id', '$user_name', '$price')";
    $data = mysqli_query($conn, $query);
    if($data)
    {
        ?>
            <script type="text/javascript">
                alert("Order is placed. Thank you.");
                window.open("http://localhost/hunger/user.php", "_self");
            </script>    
        <?php
        
    }
    else{
        ?>
            <script type="text/javascript">
                alert("Something is wrong.");
                window.open("http://localhost/hunger/user.php", "_self");
            </script>    
        <?php
    }
}
?>
<link rel="stylesheet" href="./admin.css">
<div class="d-flex">
<?php 
@include 'user_sidebar.php';
?>
<div>
    

<div class="order-form">
<h1>Order your food</h1>
<form action="" method="POST">
<input type="hidden" value="<?php echo $_GET['food_id'];?> " name="food_id" id = "food_id"><br>

<?php
$id = $_GET['food_id'];
$select = "SELECT * FROM food_menu WHERE ID = '$id'";
$order_data = mysqli_query($conn, $select);
$row = mysqli_fetch_array($order_data);
?>
<input type="hidden" value="<?php echo $row['Price'];?> " name="price" id = "price">
<label style="margin-right: 70px;" for="">Food: </label>
<input type="text" value="<?php echo $row['Name'] ?>" name="food" id = "food"><br>
<label style="margin-right: 14px;" for="description">Description: </label>
<input type="text" value="<?php echo $row['Description'] ?>"  name="description" id = "description"><br>
<label style="margin-right: 40px;" for="f_name">Quantity</label>
<input type="number" min="1" name="quantity" id = "quantity"><br>
<label style="margin-right: 44px;" for="address">Address: </label>
<input type="text"  name="address" id = "address"><br>
<button style=" padding: 14px 30%"  class="login-btn" type="submit" name="order">Order</button>
<img src="./img/food_deli.gif" alt="">
</form>
</div>
</div>
</div>

<script type="text/javascript">
   function quantity()
   {
    var quantity = document.getElementById('quantity').value;
    console.log(quantity);
    if(quantity <1)
    {
        alert('Insert a valid number');
        return false;
    }
    return true;
   }
</script>

<style>
    body{
        background-color: #F5F7F8;
    }
</style>
