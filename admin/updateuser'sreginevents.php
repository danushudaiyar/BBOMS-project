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
	<title> REGISTERED- USER FOR CAMPAIGN </title>
	<link rel="stylesheet" href="regestration.css">
</head>
<body>
  
  <br>
  <br>
  <br>
  <br>

  <form action="" method="POST">
<div class="wrapper">
    <div class="title">
    REGISTERD FOR CAMPAIGN'S
    </div>
    <div class="form">
    <div class="form-group">
       <div class="inputfield">
          <label>First NAME </label>
          <input type="text" value="<?php echo $result['fname'];?>"  name="fname"  required class="input">
       </div> <br> <br> 
       <div class="inputfield">
          <label>last  NAME </label>
          <input type="text" value="<?php echo $result['lname'];?>" name="lname"  required class="input">
       </div> <br> <br>
        <div class="inputfield">
          <label>Phone</label>
          <input type="text" value="<?php echo $result['phone'];?>" name="phone" required class="input">
       </div> <br> <br>  
       <div class="inputfield">
          <label>EMAIL</label>
          <input type="email" value="<?php echo $result['email'];?>" name="email" required class="input">
       </div>  <br> <br> 
       <div class="inputfield">
        <label>Blood Group</label>
        <div class="custom_select">
          <select name="bloodgp">
            <option value="NOT SELECTED">Select</option>
            <option value="A+"
            <?php 
               if( $result['bloodgp'] == 'A+')
               {
                   echo"selected";
               }
               ?>
            >A+</option>
            <option value="A-"
            <?php 
               if( $result['bloodgp'] == 'A-')
               {
                   echo"selected";
               }
               ?>
               >A-</option>
            <option value="AB+"
            <?php 
               if( $result['bloodgp'] == 'AB+')
               {
                   echo"selected";
               }
               ?>
            >AB+</option>
            <option value="AB-"
            <?php 
               if( $result['bloodgp'] == 'AB-')
               {
                   echo"selected";
               }
               ?>
            >AB-</option>
            <option value="B+"
            <?php 
               if( $result['bloodgp'] == 'B+')
               {
                   echo"selected";
               }
               ?>
            >B+</option>
            <option value="B-"
            <?php 
               if( $result['bloodgp'] == 'B-')
               {
                   echo"selected";
               }
               ?>
            >B-</option>
            <option value="O+"
            <?php 
               if( $result['bloodgp'] == 'O+')
               {
                   echo"selected";
               }
               ?>
            >O+</option>
            <option value="O-"
            <?php 
               if( $result['bloodgp'] == 'O-')
               {
                   echo"selected";
               }
               ?>
            >O-</option>
          </select>
        </div>
     </div>   <br> <br>
     <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender">
              <option value="NOT SELECTED">Select</option> 
              <option value="male"
               <?php 
               if( $result['gender'] == 'male')
               {
                   echo"selected";
               }
               ?>
              >Male</option>
              <option value="female"
              <?php 
               if( $result['gender'] == 'female')
               {
                   echo"selected";
               }
               ?>
              >Female</option>
              <option value="OTHER"
              <?php 
               if( $result['gender'] == 'other')
               {
                   echo"selected";
               }
               ?>
              >other</option>
            </select>
          </div>
       </div> 
       </div>
       <br> <br>
       <div class="inputfield">
          <label>Address</label>
          <input type="text" value="<?php echo $result['address'];?>" name="address" required class="input">
       </div>  <br> <br>
       <div class="inputfield" >
        <label>Time</label>
       <div class="custom_select" required>
          <select name="time" required>
            <option value="not selected">Select</option>
            <option value="9-10"
            <?php 
               if( $result['time'] == '9-10')
               {
                   echo"selected";
               }
               ?>
            >9-10</option>
            <option value="10-11"
            <?php 
               if( $result['time'] == '10-11')
               {
                   echo"selected";
               }
               ?>
            >10-11</option>
            <option value="11-12"
            <?php 
               if( $result['time'] == '11-12')
               {
                   echo"selected";
               }
               ?>
            >11-12</option>
            <option value="12-1"
            <?php 
               if( $result['time'] == '12-1')
               {
                   echo"selected";
               }
               ?>
            >12-1</option>
            <option value="1-2"
            <?php 
               if( $result['time'] == '1-2')
               {
                   echo"selected";
               }
               ?>
            >1-2</option>
            <option value="3-4"
            <?php 
               if( $result['time'] == '3-4')
               {
                   echo"selected";
               }
               ?>
            >3-4</option>
            <option value="4-5"
            <?php 
               if( $result['time'] == '4-5')
               {
                   echo"selected";
               }
               ?>
            >4-5</option>
           
          </select>
        </div>
     </div> 
       </div>  <br> <br>
       <div class="inputfield">
        <input type="submit" value="update" class="btn" name="update">
        </div>
    </body>
    </html>
    <?php 
if($_POST['update'])
{
       
    $fname     =     $_POST["fname"];
    $lname     =     $_POST["lname"];
    $phone     =     $_POST["phone"];
    $email          =      $_POST["email"];
    $bloodgp     =     $_POST["bloodgp"];
    $gender     =     $_POST["gender"];
    $address    =     $_POST["address"];
    $time      =      $_POST["time"];
    
   
    $query = "UPDATE reginevent  SET fname='$fname',lname='$lname',phone='$phone',email='$email',bloodgp='$bloodgp',gender='$gender',address='$address',time='$time' WHERE id='$id'";
    $data  =  mysqli_query($conn,$query);
    if($data)
    {
      echo "<script>alert('Data Updated Sucessfully')</script>";
    
    ?>
     <meta http-equiv = "refresh" content = "0; url =http://localhost/admin/displayregforevent.php" />
     <?php 
     }
    else
    {
      echo "Data insertion failed";
    }
}

?>
