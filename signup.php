<?php
@include 'config.php';
@include 'links.php';

if(isset($_POST['sign_btn']))
{
    $name = $_POST['name'];
    $email= $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $sub_type = $_POST['sub_type'];
    $user_type = 'User';

    $select = "SELECT * FROM user_signup WHERE email = '$email'";
    $data = mysqli_query($conn, $select);
    $result = mysqli_num_rows($data);

    if($result>0)
    {
        $error[] = 'User already exists!';
    }
     if($pass != $cpass ){ 
        $error[] = 'Passwords do not match!';
    }
    else{
        $insert = "INSERT INTO user_signup (name, email, password, sub_type, user_type) VALUES ('$name', '$email', '$pass', '$sub_type', '$user_type')";
        mysqli_query($conn, $insert);
        header('location:login.php');
    }
};
?>

    <link rel="stylesheet" href="./signup.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="crossorigin="anonymous"referrerpolicy="no-referrer"
    />
    <style>
    body{
    margin: 25px 0;
    padding: 0 30%;
    background-color: #FFF5E0;;
}
</style>
<script src="valid.js"></script>
<body id="#signup">
    <div>
    <form action="signup.php" method="POST" onsubmit="return login_valid()">
        <div class="sign">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>


        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<div class="error-msg">';
                echo '<span class= "error-msg">'.$error.'</span>';
                echo '</div>';
            }
        };
        ?>


        <div class= "row">
        <div class ="col-lg-12">
        <label for="name" style ="padding: 0"><i class="fa-solid fa-user" style="color: #000000;"></i>Username</label>
        <br><input style = "width: 40%;" type="name" placeholder="Enter your username" name="name" id="name">
        
        <!-- <div style="background-color : black; margin-right:80%;"> -->
        <label for="types"><i class="fa-solid fa-list" style="color: #000000; margin : 20px 0;"></i> Choose your option: 
        </label>
        <select class="se" name="sub_type" id="sub_type" style= "background: transparent;
    border: 1px solid #2E4374;
    border-radius: 10px;
    padding: 10px;">
        <option  value="no">Select...</option>
            <option value="Daily">Daily</option>
            <option value="Weekly">Weekly</option>
            <option value="bi">Bi-Weekly</option>
        </select>
        </div>
        </div>
       
        <label style ="padding: 0 0 15px" for="email"><i class="fa-solid fa-envelope" style="color: #000000;"></i>Email</label>
        <input type="email" placeholder="Enter your Email..." name="email" id="email">
        <label for="password"><i class="fa-solid fa-lock"></i>Password</label>
        <input type="password" placeholder="Type your password" name="pass" id="pass">
        <label for="Re-type"><i class="fa-solid fa-lock"></i>Re-type Password</label>
        <input type="password" placeholder="Re-type your password" name="cpass" id="cpass">
        <button type="button" class="cnl-btn" onclick="document.getElementById('cross').style.display='none'">Cancel</button>
        <button type="submit" name="sign_btn" class="sgn-btn">Sign Up</button> <br> <br>
        <p class="login">Already have an account? <a href="login.php">login</a></p>
        </div>
    </form>
    </div>
    <script>
        var modal= document.getElementById('cross');
        window.onclick = function(event)
        {
            if(event.target == modal){
                modal.style.display = "none";
            }
        }
    </script>
</body>
