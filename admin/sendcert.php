<?php include("connection.php");

$id = $_GET['id'];
$query ="select * from reginevent where id = '$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SEND CERTIFIGATE TO USER'S </title>
	<link rel="stylesheet" href="regestration.css">
  <style>
  
  
  </style>
</head>
<body>
  
  <br>

  <form action="mail.me.php" method="POST">
     <div class="wrapper" style="text-align: center;">
       <div class="title">
         SEND CERTIFIGATE TO USER'S
        </div>
        <div class="form">
           <div class="form-group">
             <div class="inputfield">
               <label>FULL NAME</label>
               <input type="text" name="fname" value="<?php echo $result['fname'];?>" required class="input">
        </div> <br> <br> 
           <div class="inputfield">
              <label>EMAIL</label>
             <input type="email" name="email" value="<?php echo $result['email'];?>" required class="input">
             </div> <br> <br>  
       <div class="inputfield">
          <label>MESSAGE</label>
          <input type="textarea" name="mess" value="click here to download your certificate ' http://localhost/gd-certificate/' " required class="input">
       </div>  <br> <br> 
       <div class="inputfield">
         <input type="submit" value="Send" class="btn" name="Send">
        </div>
 </form>
    </body>
    </html>
    <?php
    