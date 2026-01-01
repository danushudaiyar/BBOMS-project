<?php include("connection.php");

$id = $_GET['id'];
$query ="select * from admintable where id = '$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration for Admin </title>
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
       Update Admin Table
        </div>
        <div class="form">
       <div class="inputfield">
          <label> Name</label>
          <input type="text" value="<?php echo $result['name'];?>" name="name" required class="input">
       </div>  
        <div class="inputfield">
          <label>Email</label>
          <input type="email" value="<?php echo $result['email'];?>" name="email" required class="input">
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" value="<?php echo $result['password'];?>" name="password" required class="input">
       </div>  
         
       <div class="inputfield">
        <input type="submit" value="update" class="btn" name="update">
        <a href="login form.html"></a>
      </div>
    </div>
  </div>	
</form>
</body>
</html>


<?php 
if($_POST['update'])
{
       
    $name     =     $_POST["name"];
    $email          =      $_POST["email"];
    $password      =      $_POST["password"];
    
   
    $query = " UPDATE admintable SET name='$name',email='$email',password='$password' WHERE id='$id'";
    $data  =  mysqli_query($conn,$query);
    if($data)
    {
      echo "<script>alert('Data Updated Sucessfully')</script>";
    
    ?>
     <meta http-equiv = "refresh" content = "0; url =http://localhost/registerduser/BBOMS/admin/displayadmin.php" />
     <?php 
     }
    else
    {
      echo "Data insertion failed";
    }
}

?>