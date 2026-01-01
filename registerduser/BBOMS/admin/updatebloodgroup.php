<?php include("connection.php");

$id = $_GET['id'];
$query ="select * from bloodbank where id = '$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update <form action=""></form></title>
	<link rel="stylesheet" href="regestration.css">
</head>
<body>
  
  <br>
  <br>
  <form role="form" action = " " method = "post">
                    <div class="box-body" align="center">
                      <div class="form-group">
                        <label for="exampleInputEmail1">bloodgroup</label>
                        <input type="text" value="<?php echo $result['bloodgroup'];?>" name="bloodgroup" required class="input">
                      </div><br>
                      <br>
          
                      <div class="form-group">
                        <label for="exampleInputPassword1">gender</label>
                        <input type="text"value="<?php echo $result['gender'];?>" name="gender" required class="input">
                      </div>
                      <var><br></var>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Quantity</label>
                          <input type="text"value="<?php echo $result['Quantity'];?>" name="Quantity" required class="input">
                        </div>
                        <div align="center"> 
                      <button type="submit" value="Update" class="btn btn-primary" name="Update">Update</button>
                    </div>
                    </form>
                    <?php 
if($_POST['Update'])
{
    
    $bloodgroup  =  $_POST["bloodgroup"];    
    $gender      =     $_POST["gender"];
    $Quantity    =      $_POST["Quantity"];

    $query = " UPDATE bloodbank SET bloodgroup='$bloodgroup',gender='$gender',Quantity=
    '$Quantity' WHERE id='$id'";
    $data  =  mysqli_query($conn,$query);
    if($data)
    {
      echo "<script>alert('Data Updated Sucessfully')</script>";
    
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/displaybloodgroup.php" />
     <?php 
     }
    else
    {
      echo "Data insertion failed";
    }
}

?>