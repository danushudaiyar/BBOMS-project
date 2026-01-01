<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="organRegestration.form.css">
</head>
<body>
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
      border-radius: 20px;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: flex;
      color: white;
      text-align: left;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover {
      background-color: #111;
    }
    </style>
    </head>
    <body>
    <!-- <section>
    <ul>
      <li><a class="active" href="homepage.html">Back</a><i class='bx bxs-home'></i></li>
      
    </ul>
    
    </section> -->

  <br>
  <br>
  <br>
     <div class="img"style=" 
display: flex;
justify-content: center;
width: 20%;
margin-left: auto;
margin-right: auto;" > 

    <img src="donateorgancenter.jpg" width="1200" height="350">
  
  <br>
  <br>
  <br>

  </div>
  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ORGANS </title>
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
      organ's
    </div>
    <div class="form">
    <div class="form-group">
       <div class="inputfield">
          <label>fname</label>
          <input type="text"  name="fname"  required class="input">
       </div> <br> <br> 
        <div class="inputfield">
          <label>lname</label>
          <input type="text" name="lname" required class="input">
       </div> <br> <br>  
       <div class="inputfield">
          <label>Age</label>
          <input type="text" name="Age" required class="input">
       </div> <br> <br>
       <div class="inputfield">
       <label>email</label>
          <input type="text"  name="email"  required class="input">
       </div> <br> <br> 
       <div class="inputfield">
          <label>relativename</label>
          <input type="text" name="relativename" required class="input">
       </div>  <br> <br> 
       <div class="inputfield">
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
              
        </div> <br> <br>
       </div>
          <label>relative-contact</label>
          <input type="text" name="relativecontact" required class="input">
       </div>  <br> <br>
       <div class="inputfield">
        <label>relative-email</label>
          <input type="email"  name="relativeemail"  required class="input">
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
     </div>   <br> <br>
       <div class="inputfield">
          <label>Address</label>
          <input type="text" name="address" required class="input">
       </div>  <br> <br>
  
       <div class="inputfield" >
        <label>WHICH ORGAN DO YOU WANT TO DONATE ???</label>
        <div class="custom_select">
          <select name="donated" required >
            <option value=" not selected">Select</option>
            <option value=" EYES">EYES</option>
            <option value="LIVER">LIVER</option>
            <option value="KIDNEY">KIDNEY</option>
            <option value="HEART">HEART</option>
            <option value="PANCREAS">PANCREAS</option>
            <option value="LUNGS">LUNGS</option>
            <option value="SKINS">SKINS</option>
            <option value="BONE">BONE</option>
            <option value="TENDONS">TENDONS</option>
          </select>
        </div>
     </div>   <br> <br>


        <!---drop-down list of organs --->


         <div class="inputfield">
          <label>Any medical issues??</label>
          <input type="text" name="issues" required class="input">
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
   $fname        = $_POST['fname'];
   $lname        = $_POST['lname'];
   $Age    = $_POST['Age'];
   $email  = $_POST['email'];
   $relativename       = $_POST['relativename'];
   $countrycode        = $_POST['countrycode'];
   $relativecontact       = $_POST['relativecontact'];
   $relativeemail      = $_POST['relativeemail'];
   $gender       = $_POST['gender'];
   $bloodgp      = $_POST['bloodgp'];
   $address      = $_POST['address'];
   $donated       = $_POST['donated'];
   $issues       = $_POST['issues'];

    $query = "INSERT INTO organ (fname,lname,Age,email,relativename,countrycode,relativecontact,relativeemail,gender,bloodgp,address,donated,issues) VALUES('$fname','$lname','$Age','$email','$relativename','$countrycode','$relativecontact','$relativeemail','$gender','$bloodgp','$address','$donated','$issues')";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
      echo "<script>alert('User Registed Sucessfully')</script>";

      ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/admin/displayuserdata.php" />

<?php
    }

    else
    {
      echo "Data insertion failed";
    }
}

?>
        

      



















