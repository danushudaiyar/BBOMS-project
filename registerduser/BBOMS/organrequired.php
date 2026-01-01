<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="bloodrequired.css">
      
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Organ  required</title>
    <link rel="stylesheet" href="bloodrequired.css" />
    <!--<script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
    
  </head>
  <body>
    <style>
      .body
      {
 text-align:center;
 width:995px;
 margin:0 auto;
 padding:0px;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#E0F2F7;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:right;
 width:995px;
}
#wrapper h1
{
 margin-top:150px;
 font-size:55px;
 color:#ee1c14;
}
#wrapper h1 a
{
 color:#ee1c14;
 font-size:18px;
}
#image_div .img_wrapper
{
 width:150px;
 position:relative;
 display:inline-block;
}
#image_div .img_wrapper img
{
 width:100%;
}
#image_div .img_wrapper:hover img
{
 -webkit-filter: blur(1.7px);
}
#image_div .img_wrapper span
{
 display:none;
 position:absolute;
 top:60px;
 left:30px;
}
#image_div .img_wrapper:hover span
{
 display:table-cell;
}
#image_div .img_wrapper span input[type="button"]
{
 width:120px;
 height:40px;
 background-color:#ff0000;
 border:none;
 color:white;
 font-weight:bold;
 font-size:17px;
}


.conatiner{
   display: flex;
   align-items: right;
   justify-content:center;
   margin: 40px , 0;
}
 .pic1{
   width: 250px;
   height: 350px;
   position: relative;
   object-fit: cover;

}
.card{
  height: 380px;
  width: 400px;
  margin: 20px;
  position:right;
  border-radius: 10px,10px,10px,10px;
  background: white;
  box-shadow: 5px 10px 20px  #040f74;
}
.info{
  padding: 20px  0;
  background: rgb(216, 32, 32);
  height: 270px;
  border-radius: 0px 0px 10px 10px;
}
.text1{
  text-align: center;
  font-size: 21px;
  color: #e2e3ec; 
}
.text2{
  text-align: center;
  margin: 10px 20px;
  padding: 10px 0;
  color: #e2e3ec; 
}
.btn{
  margin: 10px 0;
  text-align: center;
}
.btn1{
  color: aqua;
  align-items: center;
  height: 40px;
  width: 100px;
  font-size: 17px;
transition: .4s all;
background: red;
outline: none;
}
      </style>
      </head>
  
  <body>
    <br>
    <br>
<?php   
include('admin/searchtable4o.php');
?>


<div class="section" style="align-self: right;">
  <div class="container" align="right" >
      <div class="card"  align="right" >
         <div class="image" align="right">
               <img src="registernow.organ.jpg"class="pic">
               </div>
               <div class="info">
                     <div class="content">
                         <p class="text1">
                         <strong>DO IT NOW !!</strong>
                         </p>
                         <p class="text2">

                         if you want to save time do it!
                         </p>
                      </div>
                      <div class="btn">
                          <a href="OrganregistrationForm.php" class="btn1"><strong>Registernow</strong></button></a>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
 
       
</div>
  </body>
  
</html>

