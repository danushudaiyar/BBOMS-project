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

$qry="select * from messages";
$result=mysqli_query($conn,$qry);
?>            
<table>
  <h1> messages Data</h1>
  <br><br><br><br><br><br>
  <table border="3" cellspacing="7" width="39%" align="center"> 
    <tr>
    <th width="2%">ID</th>
    <th width="8%">Name</th> 
    <th width="8%">EMAIL</th>
    <th width="8%">Messages</th>
    <th width="8%">Actions</th>
    
    
 </tr>
<?php 
while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['id']."</td>
  <td>".$row['name']."</td>
 
  <td>".$row['email']."</td>
  
  <td>".$row['mess']."</td>
 
 
       <td> <a href='updatenform.php?id=$row[id]'><input type='Submit' value='message' class='Update'>
      
     
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