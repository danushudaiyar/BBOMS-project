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
      ADD Campaign
    </div>
    <div class="form">
    <div class="form-group">
       <div class="inputfield">
          <label>Campaign Name</label>
          <input type="text"  name="campaignname"  required class="input">
       </div> <br> <br> 
        <div class="inputfield">
          <label>Organizer</label>
          <input type="text" name="organizer" required class="input">
       </div> <br> <br>  
       <div class="inputfield">
          <label>Date</label>
          <input type="date" name="date" required class="input">
       </div>  <br> <br> 
       <div class="inputfield">
          <label>Location</label>
          <input type="location" name="location" required class="input">
       </div>  <br> <br>
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

    $query = "insert into campaign(campaignname,organizer,date,location,description) values ('$campaignname','$organizer','$date','$location','$description')";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
        if(!$data){
            echo"ERROR";
        }else {
            echo" <script>alert('Campaigin Sucessfully')</script>";
            
        
        }
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/admin/displaycampaign.php" />
       
    <?php
    }
     else{
            echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
        }
        
    }    
        ?>
        

      



















