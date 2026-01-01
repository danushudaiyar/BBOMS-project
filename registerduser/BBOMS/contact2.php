<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> CONTACT_US</title>
	<link rel="stylesheet" href="regestration.css">
  <style>
  
  
  </style>
</head>
<body>
  
  <br>

  <form action="" method="POST">
<div class="wrapper" style="text-align: center;">
    <div class="title">
      CONTACT_US
    </div>
    <div class="form">
    <div class="form-group">
       <div class="inputfield">
          <label>FULL NAME</label>
          <input type="text" name="name" required class="input">
       </div> <br> <br> 
        <div class="inputfield">
          <label>EMAIL</label>
          <input type="email" name="email" required class="input">
       </div> <br> <br>  
       <div class="inputfield">
          <label>MESSAGE</label>
          <input type="textarea" name="mess" required class="input" style="  height:200px; font-size:14pt; ">
       </div>  <br> <br> 
       <div class="inputfield">
        <input type="submit" value="Send" class="btn" name="Send">
        </div>
    </body>
    </html>
    <?php
    include("connection.php");
if($_POST['Send'])
{
    $name  =  $_POST["name"];    
    $email      =     $_POST["email"];
    $mess    =      $_POST["mess"];
    

    $query = "insert into  messages (name,email,mess) values ('$name','$email','$mess')";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Message Sent Sucessfully')</script>";
  
        ?>
  <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/contact2.php" />
  
  <?php
      }
  
      else
      {
        echo "failed to send Message";
      }
  }  
        ?>
