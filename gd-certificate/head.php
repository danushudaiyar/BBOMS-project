


<html>
<head>
<title></title>
<link rel="stylesheet" href="regestration.css">
</head>
<body>

<form method="post" action="gd-certificate.php"> <br>
<br>
<div class="wrapper" style="text-align: center;">
<div class="title">
      Fill Detils To Download Certificate
    </div>
<div class="form">
       <div class="inputfield">
          <label> Name</label>
          <input type="text" name="name" required class="input">
       </div>  <Br>
       <div class="inputfield">
          <label>Donation OF</label>
          <div class="custom_select" >
            <select name="donation" required>
              <option value="">Select</option> 
              <option value="Blood">Blood</option>
              <option value="Organ">Organ</option>
            
            </select>
          </div>
       </div> 

       <br>
       <br>

       <div class="inputfield">
        <input type="submit" value="Generate" class="btn" name="submit"
        onclick="this.form.target='_blank';
return true;">
        
      



<!-- Name <input type=text name=name    class='form-control' size=24> <br> <br>
Donation of<select name=donation class='form-control'><option value='BLOOD'>BLOOD</option><option value='ORGAN'>ORGAN</option></select>  <br> <br>
<input type=submit value=Submit name="submit" class='btn btn-info'  -->


</form>


</body>
</html>
