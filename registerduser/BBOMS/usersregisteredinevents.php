<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> REGISTERED- USER FOR CAMPAIGN </title>
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
    REGISTERD FOR CAMPAIGN'S
    </div>
    <div class="form">
    <div class="form-group">
       <div class="inputfield">
          <label>FULLNAME </label>
          <input type="text"  name="fname"  required class="input">
       </div> <br> <br> 
       <div class="inputfield">
          <label> LAST NAME </label>
          <input type="text"  name="lname"  required class="input">
       </div> <br> <br> 
        <div class="inputfield">
          <label>Phone</label>
          <input type="text" name="phone" required class="input">
       </div> <br> <br>  
       <div class="inputfield">
          <label>EMAIL</label>
          <input type="email" name="email" required class="input">
       </div>  <br> <br> 
       <div class="inputfield" >
        <label>Blood Group</label>
        <div class="custom_select" required>
          <select name="bloodgp" required>
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
        </div>
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select" >
            <select name="gender" required>
              <option value="">Select</option> 
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="OTHER">other</option>
            </select>
          </div>
       </div> 
       </div>
       <div class="inputfield">
          <label>Address</label>
          <input type="text" name="address" required class="input">
       </div>  <br> <br>
       <div class="inputfield" >
        <label>Time</label>
        <div class="custom_select" required>
          <select name="time" required>
            <option value="">Select</option>
            <option value="9-10">9-10</option>
            <option value="10-11">10-11</option>
            <option value="11-12">11-12</option>
            <option value="12-1">12-1</option>
            <option value="1-2">1-2</option>
            <option value="3-4">3-4</option>
            <option value="4-5">4-5</option>
           
          </select>
        </div>
     </div> 
       <div class="inputfield">
        <input type="submit" value="register" class="btn" name="register">
        </div>
    </body>
    </html>


    <?php 
include("connection.php");
if($_POST['register'])
{
  $fname        = $_POST['fname'];
  $lname        = $_POST['lname'];
  $phone     = $_POST['phone'];
  $email     = $_POST['email'];
  $bloodgp  = $_POST['bloodgp'];
  $gender       = $_POST['gender'];
  $address      = $_POST['address'];
  $time       = $_POST['time'];

    $query = " INSERT into reginevent (fname,lname,phone,email,bloodgp,gender,address,time) values ('$fname','$lname','$phone','$email','$bloodgp','$gender','$address','$time')";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
        if(!$data){
            echo"ERROR";
        }else {
            echo" <div style='text-align: center'><h1>Registered sucessfully</h1>";
            echo" <a href='index.php'><h3>Go Back</h3>";
        
        }
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/eventspage.php" />
       
    <?php
    }
     else{
            echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
        }
        
    }    
        ?>