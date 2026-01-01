
<html>
    <head>
        <tittle>
        </tittle>
        <style> 
        body {
            background-color:none;
        }
        table{
          text-align: none;
        }
        .Update{
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            cursor:pointer
        }
        .Delete{
            background-color: red;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            cursor:pointer
        }
        h1{
          text-align: center;
        }
        </style>
    </head>
</html>

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





<?php

include "connection.php";

$qry="select * from campaign";
$result=mysqli_query($conn,$qry);
?>            
<table>
  <h1> Campaign Data</h1>
  <br><br><br><br><br><br>
  <table border="3" cellspacing="7" width="49%" align="center"> 
    <tr>
    <th width="5%">ID</th>
    <th width="8%">CAMPAIGN  NAME</th>
    <th width="8%">ORGANIZER</th>
    <th width="10%">DATE</th>
    <th width="8%">LOCATION</th>
    <th width="5%">DISCREPTION</th>
    <th width="5%">ACTIONS</th>
    
 </tr>
<?php 
while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['id']."</td>
  <td>".$row['campaignname']."</td>
  <td>".$row['organizer']."</td>
  <td>".$row['date']."</td>
  <td>".$row['location']."</td>
  <td>".$row['description']."</td>
 
       <td> <a href='updatecampaign.php?id=$row[id]'><input type='Submit' value='Update' class='Update'>
       <a href='deletecampaign.php?id=$row[id]'><input type='Submit' value='Delete' class='Delete'onclick = 'return check_delete()''</a></td>
     
</tr>";
}


?>
</table>
<script> 
 function check_delete()
 {
   return confirm('Are You Sure You Want To Delete The Record ?');
 }
</script>
