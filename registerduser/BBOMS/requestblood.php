<?php include("connection.php");

 session_start();


?>


<?php include("connection.php");?>
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
<div class="wrapper" >
    <div class="title">
    REGISTERD FOR Blood 
    </div>
    <div class="form">
    <div class="inputfield">
    <label>FULLNAME </label>
          <input type="text" value="<?php echo $result['fname'];?>" name="fname" required class="input">
       </div> <br> <br>
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
       </div>    <br> <br> 
       <div class="inputfield" >
        <label>Blood Group</label>
        <div class="custom_select" required>
          <select  name="bloodgp" required>
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
     </div>   <br> <br>
       <div class="inputfield">
    <label>email </label>
          <input type="email" value=" <?php echo $_SESSION['user']?>" name="email" required class="input">
       </div> <br> <br>
       <div class="inputfield">
    <label>phone </label>
          <input type="int" value="phone" name="phone" required class="input">
       </div> <br> <br>
       <div class="inputfield">
    <label>address </label>
          <input type="text" value="address" name="address" required class="input">
       </div> <br> <br>
      
       <div class="inputfield">
          <label>Emergency</label>
          <input type="text" value="emergency" name="emergency" required class="input">
       </div>  <br> <br>
       <div class="inputfield">
        <input type="submit" value="register" class="btn" name="register">
        </div>
    </body>
</form>
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
