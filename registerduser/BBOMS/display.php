<html>
    <head>
        <tittle>
        
        </tittle>
        <style> 
        body {
            background-color: grey;
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
        </style>
    </head>
</html>




<?php 
include("connection.php");
error_reporting(0);
$query ="select * from form";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);

 //echo $total;
 if($total != 0)
 {
     ?>
     <h2 align="center">Registered User's Data</h2>
<table border="3" cellspacing="7" width="78%" align="center"> 
    <tr>
    <th width="5%">ID</th>
    <th width="8%">FIRST NAME</th>
    <th width="8%">LAST NAME</th>
    <th width="8%">PASSWORD</th>
    <th width="8%">GENDER</th>
    <th width="5%">BLOOD GROUP</th>
    <th width="8%">EMAIL</th>
    <th width="10%">PHONE</th>
    <th width="10%">ADDRESS</th>
    <th width="8%">POSTAL</th>
    <th width="8%">Action</th>
 </tr>



    

<?php
     while($result = mysqli_fetch_assoc($data))
     {
       echo "<tr>
       <td>". $result[id]."</td>
       <td>". $result[fname]."</td>
       <td>".$result[lname]."</td>
       <td>".$result[password]."</td>
       <td>".$result[gender]."</td>
       <td>".$result[bloodgp]."</td>
       <td>".$result[email]."</td>
       <td>".$result[phone]."</td>
       <td>".$result[address]."</td>
       <td>".$result[postal]."</td>

       <td> <a href='updateform.php?id=$result[id]'><input type='Submit' value='Update' class='Update style='backgroung-colour: green''</a></td>
    </tr>";
     }
  //echo "Table has records";
 }
 else
 {
     echo "table is empty";
 }
?>
</table>


