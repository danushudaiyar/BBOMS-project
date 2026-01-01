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

     <script>
        function valid()
        {
           var check;
            check = document.form.gender.value;
            if(check == -1)
            {
              alert("please seleact the option");
            }
            else
            {
              alert("form submited sucessfully");
            }
        }

       </script>
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
          <a href="http://localhost/registerduser/BBOMS/admin/displaycampaign.php">
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
          <a href="adminlogin.php">
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
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>

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
       <div class="inputfield" >
           <label>Country-code</label>
             <div class="custom_select" >
             <select name="countrycode" required>
             <option value="">Select</option>
             <option  value="213">Algeria (+213)</option>
		<option  value="61">Australia (+61)</option>
		<option  value="43">Austria (+43)</option>
		<option  value="852">Hong Kong (+852)</option>
		<option  value="36">Hungary (+36)</option>
		<option  value="354">Iceland (+354)</option>
		<option  value="91">India (+91)</option>
		<option  value="62">Indonesia (+62)</option>
		<option  value="98">Iran (+98)</option>
		

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
            <input type="checkbox" required>
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
   $gender       = $_POST['gender'];
   $bloodgp      = $_POST['bloodgp'];
   $email       = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $phone        = $_POST['phone'];
   $address      = $_POST['address'];
   $postal     = $_POST['postal'];

    $query = "INSERT INTO form (fname,lname,password,conpassword,gender,bloodgp,email,countrycode,phone,address,postal) VALUES('$fname','$lname','$password','$conpassword','$gender','$bloodgp','$email','$countrycode','$phone','$address','$postal')";
   
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