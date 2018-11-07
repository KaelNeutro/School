<?php
$std_guardian=$_SESSION['l_user'];
	$view_students_query="select * from students WHERE guardianUser='$std_guardian' AND grade='$Vac_grade' AND education='$Vac_edu'";//select query for viewing students.
	$run=mysqli_query($dbcon,$view_students_query);//here run the sql query.
	$cont=0;
while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
{
 $std_code=$row[0];
 $std_name=$row[1];
 ?>
 <select class="form-control" id="<?php echo "slc_std".$cont; ?>" name="<?php echo "slc_std".$cont; ?>" required> 
       <option> </option>
</select>
<?php
$cont = $cont+1;
}
?>