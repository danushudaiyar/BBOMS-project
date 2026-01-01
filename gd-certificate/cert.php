<?php
include('connection.php');
if($_POST['submit'])
{
 $name        = $_POST['name'];
 $donation       = $_POST['donation'];
 
 $email       = $_POST['email'];

$query = "INSERT INTO certificate (name,donation,email) values ('$name','$donation','$email')";
 
$data  =  mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Data Updated Sucessfully')</script>";

    ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/gd-certificate/" />

<?php
  }

  else
  {
    echo "<script>alert('Data insertion failed')</script>";
  }
}  
    ?>

