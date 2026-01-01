
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


<?php

include "connection.php";

$qry="SELECT * FROM reginevent";
$result=mysqli_query($conn,$qry);
?>            
<table>
  <h1> user's regiseted in events Data</h1>
  <br><br><br><br><br><br>
  <table border="3" cellspacing="7" width="74%" align="center"> 
    <tr>
    <th width="2%">ID</th>
    <th width="8%">fullname</th>
    <th width="8%">lastname</th>
    <th width="8%">contact</th>
    <th width="8%">email</th>
    <th width="8%">bloodgroup</th>
    <th width="8%">gender</th>
    <th width="8%">address</th>
    <th width="8%">time</th>
    <th width="8%">actions</th>
    
    
 </tr>
<?php 
while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['id']."</td>
  <td>".$row['fname']."</td>
  <td>".$row['lname']."</td>
  <td>".$row['phone']."</td>
  <td>".$row['email']."</td>
  <td>".$row['bloodgp']."</td>
  <td>".$row['gender']."</td>
  <td>".$row['address']."</td>
  <td>".$row['time']."</td>
 
 
       <td> <a href='updatereginevent.php?id=$row[id]'><input type='Submit' value='Update' class='Update'>
       <a href='deletereginevent.php?id=$row[id]'><input type='Submit' value='Delete' class='Delete'onclick = 'return check_delete()''</a></td>
     
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