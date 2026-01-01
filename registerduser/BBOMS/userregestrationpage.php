<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
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
      Registration Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" name="fname" required class="input">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" name="lname" required class="input">
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
          <label>age</label>
          <input type="text" name="age" required class="input">
       </div> 
       <div class="inputfield">
          <label>weight</label>
          <input type="number" name="weight" required class="input">
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
     </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="email" name="email" required class="input">
       </div> 

       <div class="inputfield">
         <label>COUNTRY CODE</label>
        <div class="custom_select">
          <select name="countrycode">
            <option value="NOT SELECTED">Select</option>
            <option value="">
            <option  value="213"
           
            >Algeria (+213)</option>
            </option>

            <option  value="61">Australia (+61)</option>
            </option>
            <option  value="43"
            >Australia (+61)</option>
            </option>
            <option  value="852"
            >Australia (+61)</option>
            </option>
            <option  value="36"
            >Australia (+61)</option>
            </option>
            <option  value="354"
            >Australia (+61)</option>
            </option>
            <option  value="91" >India (+91)</option>
            </option>
            <option  value="62" >Australia (+61)</option>
            </option>
            <option  value="98" >Australia (+61)</option>
            </option>

          </select>
              
        </div>
     </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" name="phone" required class="input">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea name="address" required class="textarea"></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" name="postal" required class="input">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
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
   $fname        = $_POST['fname'];
   $lname        = $_POST['lname'];
   $password     = $_POST['password'];
   $conpassword  = $_POST['conpassword'];
   $age        = $_POST['age'];
   $weight        = $_POST['weight'];
   $gender       = $_POST['gender'];
   $bloodgp      = $_POST['bloodgp'];
   $email       = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $phone        = $_POST['phone'];
   $address      = $_POST['address'];
   $postal     = $_POST['postal'];

    $query = "INSERT INTO form (fname,lname,password,conpassword,age,weight,gender,bloodgp,email,countrycode,phone,address,postal) VALUES('$fname','$lname','$password','$conpassword','$age','$weight','$gender','$bloodgp','$email','$countrycode','$phone','$address','$postal')";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
      echo "<script>alert('User Registed Sucessfully')</script>";

      ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/login%20form.php" />

<?php
    }

    else
    {
      echo "Data insertion failed";
    }
}

?>