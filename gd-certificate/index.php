

<html>
<head>
<title></title>
<link rel="stylesheet" href="regestration.css">
</head>
<body>

<form method="post" action=""> <br>
<br>

<div class="wrapper" style="text-align: center;">
    <div class="title">
      Fill Detils To verify you 
    </div>
    <div class="form">
       <div class="inputfield">
          <label> Name</label>
          <input type="text" name="name" required class="input">
       </div>  <br>  <br>
        <div class="inputfield">
          <label>Email</label>
          <input type="email" name="email" required class="input">
       </div>   <br>  <br>
       <div class="inputfield">
          <label>Age</label>
          <input type="number" name="age" required class="input">
       </div>  <br>  <br>
       <div class="inputfield">
          <label>Donation OF</label>
          <div class="custom_select" >
            <select name="donation" required>
              <option value="">Select</option> 
              <option value="Blood">Blood</option>
              <option value="Organ">Organ</option>
            
            </select>
          </div>
       </div>  <br>  <br>
       <div class="inputfield">
        <input type="submit" value="Generate" class="btn" name="submit">
        
      </div>
       </form>
<!-- Name <input type=text name=name class='form-control' size=24 required > <br> <br>
Email <input type=email name=email class='form-control' size=24 required > <br> <br>
Age <input type="number" name=age class="form-control" required > <BR> <BR>
Donation of<select name=donation class='form-control'required > <option value=''>SELECT</option><option value='BLOOD'>BLOOD</option><option value='ORGAN'>ORGAN</option></select>  <br> <br>
<input type=submit value=Submit name="submit" class='btn btn-info'> -->


</body>
</html>
<?php
session_start();
include('connection.php');
if($_POST['submit'])
{
 $name        = $_POST['name'];
 $donation       = $_POST['donation'];
 $age           = $_POST['age'];
 $email       = $_POST['email'];

$query = "INSERT INTO certificate (name,donation,age,email) values ('$name','$donation','$age','$email')";
 
$data  =  mysqli_query($conn,$query);

if($data)
{
         echo "<script>alert('you have been redirected tothe certificate page enter details and download certificate')</script>";
?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/gd-certificate/head.php" />

<?php
  }

  else
  {
    echo "<script>alert('Data insertion failed')</script>";
  }
}  
    ?>

