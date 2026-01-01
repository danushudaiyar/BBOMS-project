<?php include("connection.php");

$id = $_GET['id'];
$query ="select * from form where id = '$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-user-circle' ></i>
      <span class="logo_name">Admins</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bxs-user-account' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user-plus' ></i>
            <span class="links_name">Add Donar</span>
          </a>
        </li>
          <li>
            <a href="#">
            </a><div class="dropdown" style="text-align: center;">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </li>
   
          <li>
          <a href="#">
            <i class='bx bx-user-x' ></i>
            <span class="links_name">Delete Donar</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-right-top-arrow-circle' ></i>
            <span class="links_name">Organs Requests</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-edit-alt' ></i>
            <span class="links_name">Update pages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-calendar'></i>
            <span class="links_name">Events</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li class="log_out">
          <a href="adminlogin.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Actions</span>
      </div>
      <div class="search-box" style="background-color: black;">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
 
</div>
</body>
</html>
 

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
     Update User's Data 
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" value="<?php echo $result['fname'];?>" name="fname" required class="input">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text"value="<?php echo $result['lname'];?>" name="lname" required class="input">
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password"value="<?php echo $result['password'];?>" name="password" required class="input">
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password"value="<?php echo $result['conpassword'];?>" name="conpassword" required class="input">
       </div> 
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
               if( $result['gender'] == 'OTHER')
               {
                   echo"selected";
               }
               ?>
              >other</option>
            </select>
          </div>
       </div> 
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
     </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text"value="<?php echo $result['email'];?>" name="email" required class="input">
       </div>
      <!--- <div class="inputfield">
          <label>Phone code</label>
          <input type="text" value="<?php echo $result['countrycode'];?>"name="countrycode" required class="input">
       </div> ----->
       <div class="inputfield">
         <label>COUNTRY CODE</label>
        <div class="custom_select">
          <select name="countrycode">
            <option value="NOT SELECTED">Select</option>
            <option value="">
            <option  value="213"
            <?php 
            if($result ['countrycode'] =='213')
            {
              echo"selected";
            }
            ?>
            >Algeria (+213)</option>
            </option>

            <option  value="61"
            <?php 
            if($result ['countrycode'] =='61')
            {
              echo"selected";
            }
            ?>
            >Australia (+61)</option>
            </option>
            <option  value="43"
            <?php 
            if($result ['countrycode'] =='43')
            {
              echo"selected";
            }
            ?>
            >Australia (+61)</option>
            </option>
            <option  value="852"
            <?php 
            if($result ['countrycode'] =='852')
            {
              echo"selected";
            }
            ?>
            >Australia (+61)</option>
            </option>
            <option  value="36"
            <?php 
            if($result ['countrycode'] =='36')
            {
              echo"selected";
            }
            ?>
            >Australia (+61)</option>
            </option>
            <option  value="354"
            <?php 
            if($result ['countrycode'] =='354')
            {
              echo"selected";
            }
            ?>
            >Australia (+61)</option>
            </option>
            <option  value="91"
            <?php 
            if($result ['countrycode'] =='91')
            {
              echo"selected";
            }
            ?>
            >India (+91)</option>
            </option>
            <option  value="62"
            <?php 
            if($result ['countrycode'] =='62')
            {
              echo"selected";
            }
            ?>
            >Australia (+61)</option>
            </option>
            <option  value="98"
            <?php 
            if($result ['countrycode'] =='98')
            {
              echo"selected";
            }
            ?>
            >Australia (+61)</option>
            </option>




          </select>
              
        </div>
     </div> 



      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" value="<?php echo $result['phone'];?>"name="phone" required class="input">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea name="address" required class="textarea"><?php echo $result['address'];?></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text"value="<?php echo $result['postal'];?>" name="postal" required class="input">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Update" class="btn" name="Update">
        
      </div>
    </div>
</div>	
  </form>
</body>
</html>


<?php 
if($_POST['Update'])
{
   $fname        = $_POST['fname'];
   $lname        = $_POST['lname'];
   $password     = $_POST['password'];
   $conpassword  = $_POST['conpassword'];
   $gender       = $_POST['gender'];
   $bloodgp      = $_POST['bloodgp'];
   $email       = $_POST['email'];
   $countrycode       = $_POST['countrycode'];
   $phone        = $_POST['phone'];
   $address      = $_POST['address'];
   $postal     = $_POST['postal'];
   
    $query = " UPDATE form SET fname='$fname',lname='$lname',password=
    '$password',conpassword='$conpassword',gender='$gender',bloodgp=
    '$bloodgp',email='$email',countrycode='$countrycode',phone='$phone',address='$address',postal='$postal' WHERE id='$id'";
    $data  =  mysqli_query($conn,$query);
    if($data)
    {
      echo "<script>alert('Data Updated Sucessfully')</script>";
    
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