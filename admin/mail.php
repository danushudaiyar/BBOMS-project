<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
//$message= $_POST['message'];
$to = "youremail@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . 'click here and download your certificate "http://localhost/gd-certificate/"';
$headers = "From: Bboms7577@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:mail.php");
?>