<?php include 'adminheader.php';
if (isset($_POST['register'])) {
	extract($_POST);
	$qi="INSERT INTO login VALUES(NULL,'$uname','$pwd','user')";
	$ri=INSERT($qi);
	$q="INSERT INTO departments VALUES(NULL,'$ri','$placeid','$dname','$phone','$email','$des') ";
	$r=INSERT($q);
	alert("registered successfully");
	return redirect("adminmanagedepartment.php");
}
if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from departments where dept_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("adminmanagedepartment.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from departments where dept_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
	$qu="UPDATE  departments SET `place_id`='$placeid',dept_name='$dname',phone='$phone',email='$email',description='$des' WHERE dept_id='$uid'";
	 $ru=update($qu);
	alert("updated");
  return redirect("adminmanagedepartment.php");
}

?>
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

<form method="POST">
<center>
	<?php 
if (isset($_GET['uid'])) {
	# code...

 ?>
<h1>UPDATE MANAGE DEPARTMENTS</h1>

<table class="table" style="width:500px;color: green">
<th>Place</th>
<td>
	<select name="placeid" >
		<option>select</option>
		<?php 
$q="select * from places";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<option value="<?php echo $row['place_id']?>">
<?php echo $row['place_name'] ;?>
</option>
<?php
}
		 ?>
		
	</select>
</td>
</tr>

<tr>
<th>Department Name</th>
<td><input type="text" name="dname" required class="form-control" value="<?php echo $rs[0]['dept_name'] ?>"></td>
</tr>
<tr>
<tr>
<th>Phone</th>
<td><input type="number" name="phone" required class="form-control" value="<?php echo $rs[0]['phone'] ?>"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="text" name="email" required class="form-control" value="<?php echo $rs[0]['email'] ?>"></td>
</tr>
<th>Description</th>
<td><input type="text" name="des" required class="form-control" value="<?php echo $rs[0]['description'] ?>"></td>
</tr>
<tr>
	 <td align="center" colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-success"></td>
 </tr>
        </table>
 


<?php }
else
{
 ?>

 <h3>MANAGE DEPARTMENTS</h3>

<table class="table" style="width:500px;color: green">
<tr>
<th>Place</th>
<td>
	<select name="placeid" >
		<option >select </option>
		<?php 
$q="select * from places";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<option value="<?php echo $row['place_id']?>" >
<?php echo $row['place_name']; ?>
</option>
<?php
}
		 ?>
		
	</select>
</td>
</tr>

<tr>
<th>Department Name</th>
<td><input type="text" name="dname" required class="form-control"></td>
</tr>
<tr>
<tr>
<th>Phone</th>
<td><input type="number" name="phone" required class="form-control"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="text" name="email" required class="form-control"></td>
</tr>
<th>Description</th>
<td><input type="text" name="des" required class="form-control"></td>
</tr>

<tr>
<th>username</th>
<td><input type="text" name="uname" required class="form-control"></td>
</tr>
<tr>
<th>password</th>
<td><input type="password" name="pwd" required class="form-control"></td>
</tr>
<tr>
	 <td align="center" colspan="2"><input type="submit" name="register" value="ADD" class="btn btn-success"></td>
 </tr>
 <?php 
}
 ?>	
 </center>
        </table>

 <h3>VIEW DEPARTMENTS</h3>
	<table class="table" style="width: 500px">
<!-- 	<thead class="thead-dark">
 -->		<tr>
			<th>slno</th>
			<th>place</th>
			<th>Department Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Description</th>
		</tr>
		<?php 
$q="SELECT * FROM departments INNER JOIN places USING(place_id)";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['place_name']; ?></td>
	<td><?php echo $row['dept_name']; ?></td>
	<td><?php echo $row['phone'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['description'];?></td>

	  <td><a class="btn btn-success" href="?uid=<?php echo $row ['dept_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['dept_id']?>">delete</a></td>
</tr>


<?php
}
		 ?>
	</table>

</form></header></div></section>
   
<?php include 'footer.php' ?>
	