<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="" method="post">
    <label for="name"> Name</label>
    <input type="text"  name="name" placeholder="Your name..">

    <label for="email">email</label>
    <input type="email"  name="email" placeholder="Your last email..">

    <label for="mess">Subject</label>
    <textarea id="mess" name="mess" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="Send" value="Submit">
  </form>
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
  <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/contact.demo.php" />
  
  <?php
      }
  
      else
      {
        echo "failed to send Message";
      }
  }  
        ?>
