<?php

$to_email =  '.$email.';
$subject = 'REQUEST APPROVED';
$message = 'Your Reuest Has Been Approved Collect IT from BLOOD BANK "BK BLOOD BANK"';
$headers = 'From: noreply @ company . com';
 mail($to_email,$subject,$message,$headers);

?>