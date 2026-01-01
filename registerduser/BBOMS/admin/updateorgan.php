<?php include("connection.php");

$id = $_GET['id'];
$query ="select * from organ where id = '$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

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
          <input type="text" value="<?php echo $result['fname'];?>"  name="fname"  required class="input">
       </div> <br> <br> 
        <div class="inputfield">
          <label>lname</label>
          <input type="text" value="<?php echo $result['lname'];?>" name="lname" required class="input">
       </div> <br> <br>  
       <div class="inputfield">
          <label>Age</label>
          <input type="text" value="<?php echo $result['Age'];?>" name="Age" required class="input">
       </div> <br> <br>
       <div class="inputfield">
       <label>email</label>
          <input type="text" value="<?php echo $result['email'];?>" name="email"  required class="input">
       </div> <br> <br> 
       <div class="inputfield">
          <label>relativename</label>
          <input type="text" value="<?php echo $result['relativename'];?>" name="relativename" required class="input">
       </div>  <br> <br> 
       <div class="inputfield">
          <label>relative-contact</label>
          <input type="text" value="<?php echo $result['relativecontact'];?>" name="relativecontact" required class="input">
       </div>  <br> <br>
       <div class="inputfield">
        <label>relative-email</label>
          <input type="text" value="<?php echo $result['relativeemail'];?>" name="relativeemail"  required class="input">
       </div> <br> <br> 
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
       </div>    <br> <br> 
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
          <label>Address</label>
          <input type="text" name="address" required class="input">
       </div>  <br> <br>
  
       <div class="inputfield" >
        <label>WHICH ORGAN DO YOU WANT TO DONATE ???</label>
        <div class="custom_select">
          <select name="donated" required >
            <option value="not selected">Select</option>
            <option value="EYES"
            <?php 
               if( $result['donated'] == 'EYES')
               {
                   echo"selected";
               }
               ?>
            >EYES</option>
            <option value="LIVER"
            <?php 
               if( $result['donated'] == 'LIVER')
               {
                   echo"selected";
               }
               ?>
               >LIVER</option>
            <option value="KIDNEY"
            <?php 
               if( $result['donated'] == 'KIDNEY')
               {
                   echo"selected";
               }
               ?>
               >KIDNEY</option>
            <option value="HEART"
            <?php 
               if( $result['donated'] == 'HEART')
               {
                   echo"selected";
               }
               ?>
               >HEART</option>
            <option value="PANCREAS"
            <?php 
               if( $result['donated'] == 'PANCREAS')
               {
                   echo"selected";
               }
               ?>
               >PANCREAS</option>
            <option value="LUNGS"
            <?php 
               if( $result['donated'] == 'LUNGS')
               {
                   echo"selected";
               }
               ?>
            >LUNGS</option>
            <option value="SKINS"
            <?php 
               if( $result['donated'] == 'SKINS')
               {
                   echo"selected";
               }
               ?>
            >SKINS</option>
            <option value="BONE"
            <?php 
               if( $result['donated'] == 'BONE')
               {
                   echo"selected";
               }
               ?>
            >BONE</option>
            <option value="TENDONS"
            <?php 
               if( $result['donated'] == 'TENDONS')
               {
                   echo"selected";
               }
               ?>
            >TENDONS</option>
          </select>
        </div>
     </div>   <br> <br>


        <!---drop-down list of organs --->


         <div class="inputfield">
          <label>Any medical issues??</label>
          <input type="text"  value="<?php echo $result['issues'];?>" name="issues" required class="input">
       </div>  <br> <br>


       
       <div class="inputfield">
        <input type="submit" value="update" class="btn" name="update">
        </div>
    </body>
    </html>
<?php

    if($_POST['update'])
{
   $fname        = $_POST['fname'];
   $lname        = $_POST['lname'];
   $Age    = $_POST['Age'];
   $email  = $_POST['email'];
   $relativename       = $_POST['relativename'];
   $relativecontact       = $_POST['relativecontact'];
   $relativeemail      = $_POST['relativeemail'];
   $gender       = $_POST['gender'];
   $bloodgp      = $_POST['bloodgp'];
   $address      = $_POST['address'];
   $donated       = $_POST['donated'];
   $issues       = $_POST['issues'];

    $query = " UPDATE organ SET  fname = '$fname',lname ='$lname',Age ='$Age',email ='$email'
    ,relativename ='$relativename',relativecontact ='$relativecontact',relativeemail ='$relativeemail'
    ,gender ='$gender',bloodgp ='$bloodgp',address ='$address',donated ='$donated',issues ='$issues' WHERE id='$id'";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
      echo "<script>alert('Data Updated Sucessfully')</script>";
    
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/admin/displayorgan.php" />
     <?php 
     }
    else
    {
      echo "Data insertion failed";
    }
}

?>