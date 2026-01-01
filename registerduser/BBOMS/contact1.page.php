


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
    <style>
        body{background:#db6565;margin:0
        }
.form
{width:340px; 
    height:440px;
    background:#e6e6e6;
    border-radius:8px;
    box-shadow:0 0 40px -10px #000;
    margin:calc(50vh - 220px)
     auto;padding:20px 30px;
     max-width:calc(100vw - 40px);
     box-sizing:border-box;
     font-family:'Montserrat',sans-serif;
     position:relative
    }
h2
{margin:10px 0;
    padding-bottom:10px;
    width:180px;color:#78788c;
    border-bottom:3px solid #78788c
}
input{
    width:100%;
    padding:10px;
    box-sizing:border-box;
    background:none;
    outline:none;
    resize:none;
    border:0;
    font-family:'Montserrat',sans-serif;
    transition:all .3s;border-bottom:2px solid #bebed2
}
input:focus{
    border-bottom:2px solid #78788c
}
p:before{
content:attr(type);
display:block;
margin:28px 0 0;
font-size:14px;
color:#5a5a5a}
button{
float:right;
padding:8px 12px;
margin:8px 0 0;
font-family:'Montserrat',sans-serif;
border:2px solid #78788c;
background:0;
color:#5a5a6e;
cursor:pointer;
transition:all .3s
}
button:hover{
background:#ec0a0a;
color:#fff
}
div{
content:'Hi';
position:absolute;
bottom:-15px;
right:-20px;
background:#4747da;
color:#fff;
width:320px;
padding:16px 4px 16px 0;
border-radius:6px;
font-size:13px;
box-shadow:10px 10px 40px -14px #000
}
span{
    margin:0 5px 0 15px
}
    </style>
</head>
<body>
    

<form class="form">
    <h2>CONTACT US</h2>
    <p type="Name:"><input placeholder="Write your name here.." name="name" ></input></p>
    <p type="Email:"><input placeholder="Let us know how to contact you back.." name="email" ></input></p>
    <p type="Message:"><input placeholder="What would you like to tell us.." name="mess" ></input></p>
    <button name="Send" value="Send" >Send Message</button>
    <div>
      <span class="fa fa-phone"></span>001 1023 567
      <span class="fa fa-envelope-o"></span> BBOMS@company.com
    </div>
  </form>
</body>
</html>
<?php 
include("connection.php");
if($_POST['Send'])
{
    $name  =  $_POST["name"];    
    $email      =     $_POST["email"];
    $mess    =      $_POST["mess"];
    

    $query = "INSERT into messages (name,email,mess) values ('$name','$email','$mess')";
   
    $data  =  mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Message Sent Sucessfully')</script>";
  
        ?>
  <meta http-equiv = "refresh" content = "0; url = http://localhost/registerduser/BBOMS/contact1.page.html" />
  
  <?php
      }
  
      else
      {
        echo "Data insertion failed";
      }
  }  
        ?>
