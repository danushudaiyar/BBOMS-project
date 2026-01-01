<?php 
 session_start();
 
 ?>


<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
  width: 100%;
  background: #e764ac;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #ee451b;
  color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}
</style>
</head>
<body>
    <br>
    <br>

<h1>Event calender</h1>
<marquee> </marquee>
<Br> 
<marquee align="center" style="color: red;">**  The page shows event's in theis month'ds only   **</marquee>

<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      March<br>
      <span style="font-size:18px">2021</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
    <li></li>
    
    
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span> <div class="Login"></div><a href="/registerduser/BBOMS/usersregisteredinevents.php">Register</a></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li><span class="active">27</span> <div class="Login"></div><a href="/registerduser/BBOMS/usersregisteredinevents.php">Register</a></li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

<html>
    <head>
        <tittle>
        </tittle>
        <style> 
        body {
            background-color:none;
        }
        table{
          text-align: none;
        }
        .Register{
            background-color:red;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 40px;
            width: 80px;
            cursor:pointer
        }
        .Deete{
            background-color: red;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 22px;
            width: 80px;
            cursor:pointer
        }
        h1{
          text-align: center;
        }
        </style>
    </head>
</html>


<?php

include "connection.php";

$qry="select * from campaign";
$result=mysqli_query($conn,$qry);
?>            
<table>
  <h1> Upcomming Events</h1>
  <br>
  <table border="3" cellspacing="7" width="51%" align="center"> 
    <tr>
    <th width="2%">ID</th>
    <th width="8%">CAMPAIGN  NAME</th>
    <th width="8%">ORGANIZER</th>
    <th width="15%">DATE</th>
    <th width="8%">LOCATION</th>
    <th width="5%">DISCREPTION</th>
    <th width="5%">ACTIONS</th>
    
 </tr>
<?php 
while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['id']."</td>
  <td>".$row['campaignname']."</td>
  <td>".$row['organizer']."</td>
  <td>".$row['date']."</td>
  <td>".$row['location']."</td>
  <td>".$row['description']."</td>
 
       <td> <a href='http://localhost:8080/registerduser/BBOMS/usersregisteredinevents.php?id=$row[id]'><input type='Submit' value='Register' class='Register'>
     
     
</tr>";
}
?>
</table>
<!--<script> 
 function check_delete()
 {
   return confirm('Are You Sure You Want To Delete The Record ?');
 }
</script>-->
</body>
</html>
