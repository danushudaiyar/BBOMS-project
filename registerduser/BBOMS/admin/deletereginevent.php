<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'connection.php';


$qry="delete from reginevent where id=$id";
$result=mysqli_query($conn,$qry);

if($result)
{
    echo"DELETED";
    ?>
    
    <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/displayreginevent.php" />


    <?php
}else
{
    echo"ERROR!!";
}
}
?>
<script>
function {
    Confirm('Are You sure You WantTo Insert Data');
}
</script>