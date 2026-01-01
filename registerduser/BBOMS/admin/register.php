<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration for Admin </title>
	<link rel="stylesheet" href="regestration.css">
</head>
<body>
  
  <br>
  <br>
  <br>
  <br>

  <form action="" method="POST">
    <div class="wrapper" style="text-align: center;">
       <div class="title">
       Registration For Admin
        </div>
        <div class="form">
       <div class="inputfield">
          <label> Name</label>
          <input type="text" name="name" required class="input">
       </div>  
        <div class="inputfield">
          <label>Email</label>
          <input type="email" name="email" required class="input">
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" name="password" required class="input">
       </div>  
        <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" name="conpassword" required class="input">
       </div> 
       <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="register">
        <a href="login form.html"></a>
      </div>
    </div>
  </div>	
</form>
</body>
</html>

<?php 
if($_POST['register'])
{
   $name        = $_POST['name'];
   $email        = $_POST['email'];
   $password     = $_POST['password'];
   
   $query = "INSERT INTO admintable (name,email,password) VALUES('$name','$email','$password')";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
      echo "<script>alert('Admin  Registed Sucessfully')</script>";

      ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/admin/displayadmin.php" />

<?php
    }

    else
    {
      echo "Data insertion failed";
    }
}

?>