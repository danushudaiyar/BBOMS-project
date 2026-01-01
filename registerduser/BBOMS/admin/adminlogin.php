<?php  
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <title> Admins login </title>
<style> 
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  text-align: center;
  background-image: url(adminback.jpg);
  background-size: cover;
  background-position-x: center;
  height: 100vh;
  overflow: hidden;
}
header{
  background-color: #DE0839;
  text-align: center;
  position: absolute;
  text-decoration-color: #e9f4fb;
}
#headersection
{
    text-align: center;
    padding:5px;
}

.headersection h1
{
    font-family:cursive;
}

.center{
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #DE0839;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #17202A;
}
.signup_link a{
  color: #E74C3C;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}
</style>
<body>
    <form method="" action="POST">
    </form>
    <div id="headerSection">
        <h1> BBOMS </h1>
        <hr>
    <div class="center">
        <div class="headsection"></div>
      <h1> Admin Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text"  name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="text" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
      <input type="submit" name="submit" value="submit">
       
        <div class="signup_link">
          Not a member? <a href="regestrationpage.html">Signup</a>
        </div>
      </form>
    </div>
</div>   
</body>
</html>

<?php
if( isset($_POST['submit']))
{
    $email  = $_POST['email'];
    $password    = $_POST['password'];


    $sql = "SELECT * FROM `admintable` WHERE email = '$email' && 
    password = '$password' ";
    $data = mysqli_query($conn,$sql);
    $total = mysqli_num_rows($data);
    echo  $total;
   if($total == 1)
   {
     echo "<script>alert('login Sucessfull');</script>";
     header ('location:regestrationpage.php');
   }
   else 
   {
     echo "<script>alert('Invalid Details');</script>";
   }
  }
?>