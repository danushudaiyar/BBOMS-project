<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sidebar Menu with sub-menu | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="btn">
      <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
      <div class="text">Side Menu</div>
      <ul>
        <li class="active"><a href="#">Dashboard</a></li>
        <li>
          <a href="#" class="feat-btn">Features
            <span class="fas fa-caret-down first"></span>
          </a>
          <ul class="feat-show">
            <li><a href="#">Pages</a></li>
            <li><a href="#">Elements</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="serv-btn">Services
            <span class="fas fa-caret-down second"></span>
          </a>
          <ul class="serv-show">
            <li><a href="#">App Design</a></li>
            <li><a href="#">Web Design</a></li>
          </ul>
        </li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Overview</a></li>
        <li><a href="#">Shortcuts</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
    <div class="content">
     
    </div>

    <script>
    $('.btn').click(function(){
      $(this).toggleClass("click");
      $('.sidebar').toggleClass("show");
    });
      $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
      });
      $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
      });
      $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>

  </body>
</html>

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
<?php

include "connection.php";

$qry="SELECT * FROM bloodbank";
$result=mysqli_query($conn,$qry);
?>            
  <h1> BloodGroup Data</h1>
  <br>
  <table border="3" cellspacing="7" width="34%" align="center"> 
    <tr>
    <th width="2%">ID</th>
    <th width="8%">BLOOD GROUP</th>
    <th width="8%">GENDER</th>
    <th width="8%">QUANTITY</th>
    <th width="8%">Action</th>
    
    
 </tr>
<?php 
while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['id']."</td>
  <td>".$row['bloodgroup']."</td>
  <td>".$row['gender']."</td>
  <td>".$row['Quantity']."</td>
 
 
       <td> <a href='updatebloodgroup.php?id=$row[id]'><input type='Submit' value='Update' class='Update'>
       <a href='deletebloodgroup.php?id=$row[id]'><input type='Submit' value='Delete' class='Delete'onclick = 'return check_delete()''</a></td>
     
</tr>";
}


?>
</table>
</head>
<script> 
 function check_delete()
 {
   return confirm('Are You Sure You Want To Delete The Record ?');
 }
</script>