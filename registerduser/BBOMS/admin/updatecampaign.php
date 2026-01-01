<?php include("connection.php");

$id = $_GET['id'];
$query ="select * from campaign where id = '$id'";
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
  <form action="" method="POST">
<div class="wrapper" style="text-align: center;">
    <div class="title">
      Update campaign
    </div>
    <div class="form">
                      <div class="form-group">
                      <div class="inputfield">
                        <label for="exampleInputEmail1">Campaign Name</label>
                        <input type="text" value="<?php echo $result['campaignname'];?>" name="campaignname" required class="input">
                      </div><br>
                      <br>
          
                      <div class="inputfield">
                        <label for="exampleInputPassword1">Organizer Name</label>
                        <input type="text"value="<?php echo $result['organizer'];?>" name="organizer" required class="input">
                      </div>
                      <var><br></var>
                      <div class="inputfield">
                          <label for="exampleInputPassword1">Date</label>
                          <input type="text"value="<?php echo $result['date'];?>" name="date" required class="input">
                        </div>
                        <br><br>
                        <div class="inputfield">
                          <label for="exampleInputPassword1">Location</label>
                          <input type="text"value="<?php echo $result['location'];?>" name="location" required class="input">
                        </div> 
                        <br><br>
                        <div class="inputfield">
                          <label for="exampleInputPassword1">Short Description</label>
                          <input type="text"value="<?php echo $result['description'];?>" name="description" required class="input">
                        </div>
                        <br><br>
                    </div>
                    <div class="inputfield">
                      <button type="submit" value="Update" class="btn btn-primary" name="Update">Update</button>
                    </div>
                    </form>
</body>
</html>

<?php 
if($_POST['Update'])
{
    $campaignname  =  $_POST["campaignname"];    
    $organizer     =     $_POST["organizer"];
    $date          =      $_POST["date"];
    $location      =      $_POST["location"];
    $description   =    $_POST["description"];
   
    $query = " UPDATE campaign SET campaignname='$campaignname',organizer='$organizer',date=
    '$date',location='$location',description='$description' WHERE id='$id'";
    $data  =  mysqli_query($conn,$query);
    if($data)
    {
      echo "<script>alert('Data Updated Sucessfully')</script>";
    
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/admin/displaycampaign.php" />
     <?php 
     }
    else
    {
      echo "Data insertion failed";
    }
}

?>