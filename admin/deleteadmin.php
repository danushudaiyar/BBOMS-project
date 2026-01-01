<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'connection.php';


$qry="delete from admintable where id=$id";
$result=mysqli_query($conn,$qry);

if($result)
{
    echo"DELETED";
    ?>
    
    <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/displayorgan.php" />


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
    Confirm('Are You sure You WantTo Insert Data');
}
</script>