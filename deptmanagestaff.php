<?php include 'deptheader.php';
 $deptid=$_SESSION['deptid'];

if (isset($_POST['register'])) {
	extract($_POST);
	$qi="INSERT INTO login VALUES(NULL,'$uname','$pwd','staff')";
	$ri=INSERT($qi);
	$q="INSERT INTO staff VALUES(NULL,'$ri','$deptid','$fname','$lname','$place','$phone','$email') ";
	$r=INSERT($q);
	alert("added successfully");
	return redirect("deptmanagestaff.php");
}
if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from staff where staff_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("deptmanagestaff.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from staff where staff_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
	$qu="UPDATE  staff SET `firstname`='$fname',lastname='$lname',place='$place',phone='$phone',email='$email' WHERE staff_id='$uid'";
	 $ru=update($qu);
	alert("updated");
  return redirect("deptmanagestaff.php");
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
<h1>UPDATE MANAGE STAFF</h1>

<table class="table" style="width:500px;color: green">

<tr>
<th>First Name</th>
<td><input type="text" name="fname" required class="form-control" value="<?php echo $rs[0]['firstname'] ?>"></td>
</tr>
<tr>
<th>Last Name</th>
<td><input type="text" name="lname" required class="form-control" value="<?php echo $rs[0]['lastname'] ?>"></td>
</tr>

<tr>
<th>Place</th>
<td><input type="text" name="place" required class="form-control" value="<?php echo $rs[0]['place'] ?>"></td>
</tr>
<tr>
<th>Phone</th>
<td><input type="number" name="phone" required class="form-control" value="<?php echo $rs[0]['phone'] ?>"></td>
</tr>

<tr>
<th>Email</th>
<td><input type="text" name="email" required class="form-control" value="<?php echo $rs[0]['email'] ?>"></td>
</tr>
<tr>
	 <td align="center" colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-success"></td>
 </tr>
        </table>
 


<?php }
else
{
 ?>

 <h3>MANAGE STAFF</h3>

<table class="table" style="width:500px;color: green">

<tr>
<th>First Name</th>
<td><input type="text" name="fname" required class="form-control" ></td>
</tr>
<tr>
<th>Last Name</th>
<td><input type="text" name="lname" required class="form-control" ></td>
</tr>
<tr>
<th>place</th>
<td><input type="text" name="place" required class="form-control"></td>
</tr>
<tr>
<th>Phone</th>
<td><input type="number" name="phone" required class="form-control"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="text" name="email" required class="form-control"></td>
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
        </table>
 <?php 
}
 ?>	
 <h3>VIEW STAFF</h3>
	<table class="table" style="width: 500px">
	<thead class="thead-dark">
		<tr>
			<th>slno</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Department Name</th>
			<th>Place</th>
			<th>Phone</th>
			<th>Email</th>
		</tr>
</thead>
		<?php 
$q="SELECT * FROM departments INNER JOIN staff USING(dept_id) where dept_id='$deptid'";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['lastname']; ?></td>
	<td><?php echo $row['firstname']; ?></td>
	<td><?php echo $row['dept_name']; ?></td>
	<td><?php echo $row['place'];?></td>
	<td><?php echo $row['phone'];?></td>
	<td><?php echo $row['email'];?></td>

	  <td><a class="btn btn-success" href="?uid=<?php echo $row ['staff_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['staff_id']?>">delete</a></td>
</tr>


<?php
}
		 ?>
	</table>

<hr>
    </center>
</form>  </header></div></section>   
    
<?php include 'footer.php' ?>
	