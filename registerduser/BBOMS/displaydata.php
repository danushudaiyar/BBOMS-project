<?php
include("connection.php");
error_reporting(0);
$query ="select * from form";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

echo $result[id]." ". $result[fname]." " . $result[password]." " ;

if($total != 0)
 {
    // echo "table has records";
 }
 else
 {
     echo  "table is empty";
 }
?>
<div class="col-lg-4 mb-4">
<div class="font-italic">uers<span style="color:red">*</span> </div>
<div><select name="form" class="form-control" required>
<?php $sql = "SELECT * from  form ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
<?php }} ?>
</select>
</div>
</div>