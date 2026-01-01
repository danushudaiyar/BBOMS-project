<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADD BLOOD GROUP</title>
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
      ADD Blood Group
    </div>
    <div class="form">
    <div class="form-group">
       <div class="inputfield">
          <label>Bloodgroup</label>
          <input type="text" name="bloodgroup" required class="input">
       </div> <br> <br> 
        <div class="inputfield">
          <label>gender</label>
          <input type="text" name="gender" required class="input">
       </div> <br> <br>  
       <div class="inputfield">
          <label>Quantity</label>
          <input type="text" name="Quantity" required class="input">
       </div>  <br> <br> 
       <div class="inputfield">
        <input type="submit" value="ADD" class="btn" name="ADD">
        </div>
    </body>
    </html>
    <?php 
include("connection.php");
if($_POST['ADD'])
{
    $bloodgroup  =  $_POST["bloodgroup"];    
    $gender      =     $_POST["gender"];
    $Quantity    =      $_POST["Quantity"];
    

    $query = "insert into bloodbank (bloodgroup,gender,Quantity) values ('$bloodgroup','$gender','$Quantity')";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Data Updated Sucessfully')</script>";
  
        ?>
  <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/admin/displaybloodgroup.php" />
  
  <?php
      }
  
      else
      {
        echo "Data insertion failed";
      }
  }  
        ?>