<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="index.css.css">
    <style> 
    .header {
      text-align: center;
    }
    </style>
  </head>
  <body>
    <br>
    <br>
    <form method="post" action="">
    </form>
    <div class="header">
      <h1> Blood Bank & Organ Management System</h1>
    </div>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password"  name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login" name="Login">
        <div class="signup_link">
          Not a member? <a href="userregestrationpage.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>


<?php



error_reporting(0);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "register";
 
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
   //echo "connection ok";
}
else
{
    echo "connection failed".mysqli_connection_error();
}
session_start();

    if( isset($_POST['Login']))
{
    $email  = $_POST['email'];
    $password    = $_POST['password'];


    $sql = "SELECT * FROM `form` WHERE email = '$email' && 
    password = '$password' ";
    $data = mysqli_query($conn,$sql);
    $total = mysqli_num_rows($data);
    echo  $total;
   if($total == 1)
   {
     //echo "<script>alert('login Sucessfull');</script>";
    
     $_SESSION['user'] = $email;
     header ('location:homepage1.php');
   }
   else 
   {
     echo "<script>alert('Invalid Details');</script>";
   }
  }
?>