<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'register');

if(isset($_POST['insertdata']))
{
    $campaignname = $_POST['campaignname'];
    $organizer = $_POST['organizer'];
    $date = $_POST['date'];
    $location = $_POST['location'];

    $query = "INSERT INTO campaign (`campaignname`,`organizer`,`date`,`location`) VALUES ('$campaignname','$organizer','$date','$location')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: displaycampaign.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>