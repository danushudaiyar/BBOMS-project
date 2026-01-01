<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'register');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $campaignname = $_POST['campaignname'];
        $organizer = $_POST['organizer'];
        $date = $_POST['date'];
        $location = $_POST['location'];

        $query = "UPDATE campaign SET campaignname='$campaignname', organizer='$organizer', date='$date', location=' $location' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>