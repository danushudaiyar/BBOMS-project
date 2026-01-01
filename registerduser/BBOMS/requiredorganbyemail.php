<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="regestration.css">
</head>
<body>

<div class="card-body">

<form action="" method="GET">
    <div class="row">
        <div class="col-md-8">
            <input type="text" name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} ?>" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
</form>

<div class="row">
    <div class="col-md-12">
        <hr>
        <?php 
            $con = mysqli_connect("localhost","root","","register");

            if(isset($_GET['stud_id']))
            {
                $stud_id = $_GET['stud_id'];

                $query = "SELECT * FROM form WHERE email='$stud_id' ";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $result)
                    {
                        ?>
                         <div class="form">
    <div class="inputfield">
    <label>FULLNAME </label>
          <input type="text" value="<?php echo $result['fname'];?>" name="fname" required class="input">
       </div> <br> <br>
       <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select" >
            <select name="gender" required>
              <option value="">Select</option> 
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="OTHER">other</option>
            </select>
          </div>
       </div>    <br> <br> 
       <div class="inputfield" >
        <label>Blood Group</label>
        <div class="custom_select" required>
          <select  name="bloodgp" required>
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
        </div>
     </div>   <br> <br>
     <div class="inputfield" >
        <label>WHICH ORGAN DO YOU WANT TO DONATE ???</label>
        <div class="custom_select">
          <select name="donated" required >
            <option value=" not selected">Select</option>
            <option value=" EYES">EYES</option>
            <option value="LIVER">LIVER</option>
            <option value="KIDNEY">KIDNEY</option>
            <option value="HEART">HEART</option>
            <option value="PANCREAS">PANCREAS</option>
            <option value="LUNGS">LUNGS</option>
            <option value="SKINS">SKINS</option>
            <option value="BONE">BONE</option>
            <option value="TENDONS">TENDONS</option>
          </select>
        </div>
     </div>   <br> <br>
       <div class="inputfield">
    <label>email </label>
          <input type="email" value="<?php echo $result['email'];?>" name="email" required class="input">
       </div> <br> <br>
       <div class="inputfield">
    <label>phone </label>
          <input type="int" value="<?php echo $result['phone'];?>" name="phone" required class="input">
       </div> <br> <br>
       <div class="inputfield">
    <label>address </label>
          <input type="text" value="<?php echo $result['address'];?>" name="address" required class="input">
       </div> <br> <br>
      
       <div class="inputfield">
          <label>Emergency</label>
          <input type="text" value="emergency" name="emergency" required class="input">
       </div>  <br> <br>
       <div class="inputfield">
        <input type="submit" value="register" class="btn" name="register">
        </div>
                        <?php
                    }
                }
                else
                {
                    echo "No Record Found";
                }
            }
           
        ?>

    </div>
</div>

</div>
</div>

</div>
</div>
</div>
        </form>
        

</body>
</html>
   