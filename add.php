<?php
@include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $targetDirectory = "img/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $name = $_POST['name'];
        $des = $_POST['des'];
        $type = $_POST['food_type'];
        $price = $_POST['price'];
        $img = $targetFile; 

        $query = "INSERT INTO food_menu (Type, Name, Description, Price, Img) VALUES ('$type', '$name', '$des', '$price', '$img')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            header('Location: admin_dash.php');
        } else {
            ?>
            <script type="text/javascript">
                alert("Error occurred!");
            </script>
            <?php
        }
    } 
    else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$f_query = "SELECT * FROM food_menu";
$data = mysqli_query($conn, $f_query);
$row = mysqli_fetch_array($data);
?>

<link rel="stylesheet" href="./admin.css">
<style>
    body {
        margin: 0;
        /* background-color: black; */
    }
</style>

<body>

<?php
@require 'admin_nav.php';
?>
<div class="d-flex">
<?php
@require 'admin_sidebar.php';
?>
<div  class="food-form">
       <h1>Add Menu</h1>
            <div class="form">
                <form action="add.php" method="POST" enctype="multipart/form-data">
                    <label style="margin-right: 24px;" for="">Food Type: </label>
                    <select class="se" name="food_type" id="type" style="background: transparent; border: 1px solid #2E4374; border-radius: 10px; padding: 10px;">
                        <option value="no">Select...</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Dinner">Dinner</option>
                    </select><br>
                    <label style="margin-right: 16px;" for="f_name">Food Name: </label>
                    <input type="text" name="name" id="name"><br>
                    <label style="margin-right: 14px;" for="Description">Description: </label>
                    <input type="text" name="des" id="des"><br>
                    <label style="margin-right: 70px;" for="Price">Price</label>
                    <input type="text" name="price" id="price"><br>
                    <label style="margin-right: 60px;" for="img">Image</label>
                    <input type="file" name="image" id="image"><br>
                    <input class="login-btn_add" type="submit" value="Insert" name="insert">
                    <img src="./img/avo.gif" alt="" class="gif" style="height: 150px;">
                </form>
            </div>
</div>
</div>
</body>

<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Hunger</span></strong>. All Rights Reserved
    </div>
  </footer>