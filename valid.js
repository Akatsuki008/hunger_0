function login_valid()
{
var email = document.getElementById('email').value;
var pass = document.getElementById('pass').value;
var con_pass = document.getElementById('cpass').value;

var e_err = document.getElementById('email_err');
var p_err = document.getElementById('pass_err');
// e_err.style.display = "none";
// p_err.style.display = "none";
let text;
    if (email == ""){
        document.getElementById('email').style.border = "5px solid red";
        document.getElementById('email').focus();
        alert("Please fill up the email");
        return false;
    }
    else if (!email.endsWith("@gmail.com"))
    {
        document.getElementById('email').style.border = "5px solid red";
        text = "Input a valid email";
        document.getElementById('email').focus();
        alert("Enter a valid email");
        return false; 
    }
    else if (pass.length <8)
    {
        document.getElementById('pass').style.border = "5px solid red";
        document.getElementById('pass').focus();
        alert("Passwords needs to be at least 8 characters!");
        return false;
    }
    else if(!/[a-zA-Z0-9]+/.test(pass)){
        document.getElementById('pass').style.border = "5px solid red";
        document.getElementById('pass').focus();
        alert("At least one uppercase, one lowercase, one special character!")
        return false;
    }
    else if(pass != con_pass)
    {
        document.getElementById('pass').style.border = "5px solid red";
        document.getElementById('pass').focus();
        alert("Passwords do not match!");
        return false;
    }
    else{
        alert("Congratulations!");
        return true;
    }
   
}