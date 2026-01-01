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
        th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;}
  
        tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}
        .Update{
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 35px;
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

$qry="select * from organ";
$result=mysqli_query($conn,$qry);
?>            
<table>
  <h1> Organ's Data</h1>
  <br><br><br><br><br><br>
  <table border="3" cellspacing="7" width="91%" align="center"> 
    <tr>
    <th width="2%">ID</th>
    <th width="8%"> first NAME</th>
    <th width="8%">last name</th>
    <th width="5%">age</th>
    <th width="8%">relativename</th>
    <th width="5%">relative-contact</th>
    <th width="5%">relative-email</th>
    <th width="8%">gender</th>
    <th width="8%">bloodgroup</th>
    <th width="8%">address</th>
    <th width="8%"> what-to-donate</th>
    <th width="8%">issues</th>
    <th width="8%">actions</th>
 </tr>
<?php 
while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['id']."</td>
  <td>".$row['fname']."</td>
  <td>".$row['lname']."</td>
  <td>".$row['Age']."</td>
  <td>".$row['relativename']."</td>
  <td>".$row['relativecontact']."</td>
  <td>".$row['relativeemail']."</td>
  <td>".$row['gender']."</td>
  <td>".$row['bloodgp']."</td>
  <td>".$row['address']."</td>
  <td>".$row['donated']."</td>
  <td>".$row['issues']."</td>
 
       <td> <a href='.php?id=$row[id]'><input type='Submit' value='requests' class='Update'>
      
     
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
