<?php include 'deptheader.php';
 $deptid=$_SESSION['deptid'];

if (isset($_POST['register'])) {
	extract($_POST);
	$q="INSERT INTO department_activities VALUES(NULL,'$deptid','$title','$des','$dat') ";
	$r=INSERT($q);
	alert("added successfully");
	return redirect("deptmanageactivity.php");
}
if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from department_activities where activity_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("deptmanageactivity.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from department_activities where activity_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
	$qu="UPDATE  department_activities SET `title`='$title',description='$des',activity_date='$dat' WHERE activity_id='$uid'";
	 $ru=update($qu);
	alert("updated");
  return redirect("deptmanageactivity.php");
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
<h1>UPDATE MANAGE ACTIVITY</h1>

<table class="table" style="width:500px;color: green">


<tr>
<th>Title</th>
<td><input type="text" name="title" required class="form-control" value="<?php echo $rs[0]['title'] ?>"></td>
</tr>
<tr>
<th>Description</th>
<td><input type="text" name="des" required class="form-control" value="<?php echo $rs[0]['description'] ?>"></td>
</tr>

<tr>
<th>Activity-Date</th>
<td><input type="date" name="dat" required class="form-control" value="<?php echo $rs[0]['activity_date'] ?>"></td>
</tr>
<tr>
	 <td align="center" colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-success"></td>
 </tr>
        </table>
 


<?php }
else
{
 ?>

 <h3>MANAGE ACTIVITY</h3>

<table class="table" style="width:500px;color: green">

<tr>
<th>Title</th>
<td><input type="text" name="title" required class="form-control" ></td>
</tr>
<tr>
<th>Description</th>
<td><input type="text" name="des" required class="form-control" ></td>
</tr>

<tr>
<th>Activity-Date</th>
<td><input type="date" name="dat" required class="form-control" ></td>
</tr>
	 <td align="center" colspan="2"><input type="submit" name="register" value="ADD" class="btn btn-success"></td>
 </tr>
        </table>
 <?php 
}
 ?>	
 <h3>VIEW ACTIVITY</h3>
	<table class="table" style="width: 500px">
	<thead class="thead-dark">
		<tr>
			<th>slno</th>
			<th>Department Name</th>
			<th>Title</th>
			<th>Description</th>
			<th>Activity Date</th>
		</tr>
</thead>
		<?php 
$q="SELECT * FROM departments INNER JOIN department_activities USING(dept_id) where dept_id='$deptid' ";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['dept_name']; ?></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['activity_date'];?></td>

	  <td><a class="btn btn-success" href="?uid=<?php echo $row ['activity_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['activity_id']?>">delete</a></td>
</tr>


<?php
}
		 ?>
	</table>

<hr>
    </center>
</form>    
</header></div></section>   

<?php include 'footer.php' ?>
	