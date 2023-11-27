<?php
@include 'config.php';

$id = $_GET['id'];
$d_query = "DELETE FROM food_menu WHERE ID ='$id'";
$d_data = mysqli_query($conn, $d_query);

if($d_data)
{
    ?>
    <script type="text/javascript">
        alert("Data Deleted!");
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
?>
?>