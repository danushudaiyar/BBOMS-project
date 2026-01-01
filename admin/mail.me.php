<?php include("connection.php");

$id = $_GET['id'];
$query ="select * from reginevent where id = '$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<?php
$receiver = "$email";
$subject = " download your certificate.";
$body = "click on the link enter your details and download your certificate click me ''";
$sender = "systembboms717@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>