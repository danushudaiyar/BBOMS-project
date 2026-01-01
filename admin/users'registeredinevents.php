
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
      ADD Campaign
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
       <div class="inputfield" >
        <label>Time</label>
        <div class="custom_select" required>
          <select name="time" required>
            <option value="">Select</option>
            <option value="A+">9-10</option>
            <option value="A-">10-11</option>
            <option value="AB+">11-12</option>
            <option value="AB-">12-1</option>
            <option value="B+">1-2</option>
            <option value="B-">3-4</option>
            <option value="O+">4-5</option>
           
          </select>
        </div>
     </div> 


     <!-------- drop down for time in users  registered----->
       <div class="inputfield">
          <label>Description</label>
          <input type="description" name="description" required class="input">
       </div>  <br> <br>
       <div class="inputfield">
        <input type="submit" value="register" class="btn" name="register">
        </div>
    </body>
    </html>


<?php 
include("connection.php");
if($_POST['register'])
{
    $campaignname  =  $_POST["campaignname"];    
    $organizer     =     $_POST["organizer"];
    $date          =      $_POST["date"];
    $location      =      $_POST["location"];
    $description   =    $_POST["description"];

    $query = "insert into reginevent (campaignname,organizer,date,location,description) values ('$campaignname','$organizer','$date','$location','$description')";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
        if(!$data){
            echo"ERROR";
        }else {
            echo" <div style='text-align: center'><h1>Campaign Created</h1>";
            echo" <a href='index.php'><h3>Go Back</h3>";
        
        }
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/displaycampaign.php" />
       
    <?php
    }
     else{
            echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
        }
        
    }    
        ?>
        

      



















