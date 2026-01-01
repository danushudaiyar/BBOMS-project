
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
        tr:nth-child(even){background-color: #f2f2f2;}

         tr:hover {background-color: #ddd;}
         

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


<?php

include "connection.php";

$qry="select * from form";
$result=mysqli_query($conn,$qry);
?>            
<table>
  <h1>Registered User's Data</h1>
  <br><br><br><br><br><br>
  <table border="3" cellspacing="7" width="86%" align="center"> 
    <tr>
    <th width="2%">ID</th>
    <th width="8%">FIRST NAME</th>
    <th width="8%">LAST NAME</th>
    <th width="8%">PASSWORD</th>
    <th width="8%">GENDER</th>
    <th width="5%">BLOOD GROUP</th>
    <th width="8%">EMAIL</th>
    <th width="5%">CODE</th>
    <th width="8%">PHONE</th>
    <th width="10%">ADDRESS</th>
    <th width="6%">POSTAL</th>
    <th width="14%">Action</th>
 </tr>
<?php 
while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['id']."</td>
  <td>".$row['fname']."</td>
  <td>".$row['lname']."</td>
  <td>".$row['password']."</td>
  <td>".$row['gender']."</td>
  <td>".$row['bloodgp']."</td>
  <td>".$row['email']."</td>
  <td>".$row['countrycode']."</td>
  <td>".$row['phone']."</td>
  <td>".$row['address']."</td>
  <td>".$row['postal']."</td>
       <td> <a href='updateform.php?id=$row[id]'><input type='Submit' value='Update' class='Update'>
       <a href='deleteuser.php?id=$row[id]'><input type='Submit' value='Delete' class='Delete'onclick = 'return check_delete()''</a></td>
     
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