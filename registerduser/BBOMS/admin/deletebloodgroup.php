<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'connection.php';


$qry="delete from bloodbank where id=$id";
$result=mysqli_query($conn,$qry);

if($result)
{
    echo"DELETED";
    ?>
    
    <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/admin/displaybloodgroup.php" />


    <?php
}else
{
    echo"ERROR!!";
}
}
?>
<script>
function 
{
    Confirm('Are You sure You WantTo delete Data');
}
</script>