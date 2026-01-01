<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM campaign WHERE CONCAT(id,campaignname,organizer,date,location,description) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `campaign`";
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
    </head>
    <body>
    <br>
    <br>
        <form action="" method="post" align="center">
            <input type="text" name="valueToSearch" placeholder="Value To Search">
            <input type="submit" class="submit" name="search" value="search">
            
            
  
  <table border="3" cellspacing="7" width="49%" align="center"> 
                <tr>
                                    <th>ID</th>
                                    <th>campaign Name</th>
                                    <th>organizer</th>
                                    <th>date</th>
                                    <th>location</th>
                                    <th>description</th>
                                    <th>actions</th>
                                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['campaignname'];?></td>
                    <td><?php echo $row['organizer'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td> <a href='BBOMS/admin/updatecampaign.php?id=$row[id]'><input type='Submit' value='Update' class='Update'>
                         <a href='deletecampaign.php?id=$row[id]'><input type='Submit' value='Delete' class='Delete'onclick = 'return check_delete()''</a></td>
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