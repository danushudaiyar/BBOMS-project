<?php  
 include("connection.php");

$id = $_GET['id'];
$query ="select * from messages where id = '$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html>
<head>
<title>FeedBack Form With Email Functionality</title>
<link href="elements.css" rel="stylesheet">
</head>
<!-- Body Starts Here -->
<body>
<div class="container" align="center">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head" align="center" >
<h3>FeedBack Form</h3>
<p>This is feedback form. Send us your feedback !</p>
</div>
<!-- Feedback Form -->
<form action="secure_email_code.php" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="<?PHP echo $result['name']; ?>">
<input name="vemail" placeholder="Your Email" type="text" value="<?PHP echo $result['email']; ?>">
<input name="sub" placeholder="Subject" type="text" value="request">
<label>Your Suggestion/Feedback</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<input id="send" name="submit" type="submit" value="Send Feedback">
</form>
<h3><?php include "secure_email_code.php"?></h3>
</div>
<!-- Feedback Form Ends Here -->
</div>
</body>
<!-- Body Ends Here -->
</html>