<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM bloodbank WHERE CONCAT(id,bloodgroup,gender,Quantity) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `bloodbank`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "register");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> SEARCH</title>
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
        .Register{
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
            table,tr,th,td
            {
                border: 1px solid black;
            }
            .submit{
                background-color: red;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            cursor:pointer
            }
        </style>
    <title>
    <h1> camapaign data</h1></title>
    </head>
    <body>
    <br>
    <br> 
    <br>
    <br> 
    <br>
    <br>  
   
        <form action="" method="post" align="center">
            <input type="text" name="valueToSearch" placeholder="Value To Search" size="27" >
            <input type="submit" class="submit" name="search" value="search">
            
            <br> <br>
  
  <table border="3" cellspacing="7" width="88%" align="center"> 
                <tr>
                                    <th width="8%">ID</th>
                                    <th width="8%">bloodgroup</th>
                                    <th  width="8%">gender</th>
                                    <th width="8%">quantity</th>
                                    <th width="8%">actions</th>
                                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['bloodgroup'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['Quantity'];?></td>
                    <td> <a href="requestblood.php?id=$row[id]" class="Register"><strong>Register</strong></button></a>  
                     <!--<a href='BBOMS/admin/adminlogin.php'><input type='Submit'  class='Register'></a>---></td>
                         
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
<script> 
 function check_delete()
 {
   return confirm('Are You Sure You Want To Delete The Record ?');
 }
</script>
