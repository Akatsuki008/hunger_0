<?php
@include 'config.php';
@include 'links.php';

if(isset($_POST['login']))
{
    $email= $_POST['email'];
    $pass = $_POST['pass'];
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_signup WHERE email = '$email' and password ='$pass'";
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result);
        
        if($row['user_type']== 'Admin')
        {
          $_SESSION['name'] = $row['name'];
          $_SESSION['user_type'] = 'Admin';
          header('Location: admin_dash.php');
        }
        else if($row['user_type']== 'User')
        {
          $_SESSION['name'] = $row['name'];
          $_SESSION['user_type'] = 'User';
          $_SESSION['user_id'] = $row['ID'];
          header('Location: user.php');
        }
        else{
          echo 'Unknown error!';
        }
    }
    else{
        echo 'Incorrect Email or Password';
    }
};
?>
<link rel="stylesheet" href="signup.css">
<body>
  <style>
    body {
      background-color: #FFF5E0;
      margin: 30px 37% 0;
    }
  </style>
  <form action="" method="POST" >
    <div class="cube" style="margin-top: 70px;">
      <h1>Welcome back!</h1>
      <label for="email"><i class="fa-solid fa-envelope" style="color: #000000;"></i> Email</label>
      <input type="text" placeholder="Email" id="email" name="email">
      <div class="err" onclick="login_valid()" id="email_err"></div>
      <i class="fa-solid fa-lock"></i> <label for="">Password</label>
      <input type="password" placeholder="Type your password" id="pass" name="pass">
      <div class="err" id="pass_err"></div>
      <div class="row">
        <div class="col-lg-6">
        <label for="types"><i class="fa-solid fa-list" style="color: #000000; "></i> Login as </label>
          <select class="se" name="user_type" id="user_type" style="background: transparent;
    border: 1px solid #2E4374;
    border-radius: 10px;
    padding: 10px 50px;
    margin-top: 0;">
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
        </div>
        <div class="col-lg-6" style="margin-top: 50px;">
          <button type="submit"style="padding: 12px 100px 12px 60px; margin: 0" name="login" class="login-btn">Login</button>
        </div>
        <p style="padding-top: 10px;">New to Hunger? <a style="color: black;" href="signup.php">Sign up</a></p>

      </div>
    </div>
    <img class="login_pic" style="height: 180px;" src="./img/food_deli.gif" alt="delivery">
  </form>

  <script src="valid.js"></script>

</body>
