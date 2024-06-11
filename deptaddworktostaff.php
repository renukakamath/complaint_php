<?php include 'deptheader.php';
   $deptid=$_SESSION['deptid'];

if (isset($_POST['add'])) {
	extract($_POST);
	$q="INSERT INTO works VALUES(NULL,'$staffid','$title','$des',curdate()) ";
	$r=INSERT($q);
	alert(" successfully add work to staff");
	return redirect("deptaddworktostaff.php");
}

?>
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>


<form method="POST">
<center>
	
 <h3>ADD WORK TO STAFF</h3>

<table class="table" style="width:500px;color: green">
<tr>
	<th>staff</th>
	<td><select name="staffid">
		<option>choose</option>
		<?php 
		$q="select * from staff";
		$r=select($q);
		foreach ($r as $row)
		 {
		 	?>
			<option value="<?php echo $row['staff_id'] ?>">
				<?php echo $row['firstname'] ?>
				<?php echo $row['lastname'] ?>
			</option>
		<?php
	}
		 ?>
	</select>
</td>
</tr>
<tr>
<th>Work</th>
<td><input type="text" name="title" required class="form-control" ></td>
</tr>
<tr>
<th>Description</th>
<td><input type="text" name="des" required class="form-control" ></td>
</tr>
<tr>
	 <td align="center" colspan="2"><input type="submit" name="add" value="ADD" class="btn btn-success"></td>
 </tr>
        </table>
 <h3>VIEW ADD WORK TO STAFF</h3>
	<table class="table" style="width: 500px">
	<thead class="thead-dark">
		<tr>
			<th>slno</th>
			<th>first name</th>
			<th>last name</th>
			<th>Work</th>
			<th>Description</th>
			<th>Date</th>
		</tr>
</thead>
		<?php 
$q="SELECT * FROM works inner join staff using(staff_id) where dept_id='$deptid' ";
$r=select($q);
$slno=1;
foreach ($r as $row)
 {
  ?>

<tr>
	<td><?php echo $slno++; ?></td>
		<td><?php echo $row['firstname'];?></td>
	<td><?php echo $row['lastname'];?></td>
	<td><?php echo $row['work'];?></td>
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['date'];?></td>
	  <td><a class="btn btn-success" href="deptviewuploadedwork.php?wid=<?php echo $row ['work_id']?>">view uploaded work</a></td>
</tr>


<?php
}
		 ?>
	</table>


    </center>
</form>   
</header></div></section>   
<?php include 'footer.php' ?>
	