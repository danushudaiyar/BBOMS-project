<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> REGISTERER FOR BLOOD </title>
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
    REGISTERD FOR Blood 
    </div>
    <div class="form">
    <div class="form-group">
       <div class="inputfield">
          <label>FULLNAME </label>
          <input type="text"  name="fullname"  required class="input">
       </div> <br> <br> 
        <div class="inputfield">
          <label>Phone</label>
          <input type="text" name="phone" required class="input">
       </div> <br> <br>  
       <div class="inputfield">
          <label>EMAIL</label>
          <input type="email" name="email" required class="input">
       </div>  <br> <br> 
       <div class="inputfield">
          <label>Address</label>
          <input type="text" name="address" required class="input">
       </div>  <br> <br>
       
       <div class="inputfield">
          <label>Emergency</label>
          <input type="text" name="emergency" required class="input">
       </div>  <br> <br>
       <div class="inputfield">
        <input type="submit" value="register" class="btn" name="register">
        </div>
    </body>
    </html>
    <?php 
    
    include('connection.php');
     if($_POST['register'])
   {
      $fname        = $_POST['fname'];
      $gender       = $_POST['gender'];
      $bloodgp      = $_POST['bloodgp'];
      $email       = $_POST['email'];
      $phone        = $_POST['phone'];
      $address      = $_POST['address'];
     $emergency    = $_POST['emergency'];
     
     $query = "INSERT INTO requestblood(fname,gender,bloodgp,email,phone,address,emergency) values ('$fname','$gender','$bloodgp','$email','$phone','$address','$emergency')";
      
     $data  =  mysqli_query($conn,$query);
   
     if($data)
     {
         echo "<script>alert('Data Updated Sucessfully')</script>";
   
         ?>
   <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/bloodRequired.page.new.php" />
   
   <?php
       }
   
       else
       {
         echo "<script>alert('Data insertion failed')</script>";
       }
   }  
         ?>
   