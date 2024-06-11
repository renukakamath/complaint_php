<?php include 'adminheader.php' ;

if (isset($_POST['add'])) 
{
	extract($_POST);
	$q="insert into `places` values(null,'$place','$des','$pin')";
	$r=insert($q);
	alert("added");
	return redirect("adminmanageplace.php");
}
if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from places where place_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("adminmanageplace.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from places where place_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
echo	$qu="UPDATE  places SET `place_name`='$place',place_description='$des',pincode='$pin' WHERE place_id='$uid'";
	 $ru=update($qu);
	 alert("updated");
  return redirect("adminmanageplace.php");
}





?>
	<center>

<form method="post">
	<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

<?php 
if (isset($_GET['uid'])) {
	# code...

 ?>
 
 		<h1>UPDATE MANGE PLACE</h1>

	<table class="table" style="width:500px">
		
		<tr>
			<th>place</th>
			<td><input type="text" name="place" required class="form-control" value="<?php echo $rs[0]['place_name'] ?>"></td>
		</tr>
		<tr>
			<th>Place_Description</th>
			<td><input type="text" name="des" required class="form-control" value="<?php echo $rs[0]['place_description'] ?>"></td>
		</tr>
		<tr>
			<th>Pincode</th>
			<td><input type="text" name="pin" required class="form-control" value="<?php echo $rs[0]['pincode'] ?>"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="update" value="UPDATE" class="btn btn-success"></td>
		</tr>
	</table>







<?php }
else
{
 ?>
		<h1>MANGE PLACE</h1>

	<table class="table" style="width: 500px">
		
		<tr>
			<th>place</th>
			<td><input type="text" name="place" required class="form-control"></td>
		</tr>
		<tr>
			<th>Place_Description</th>
			<td><input type="text" name="des" required class="form-control" ></td>
		</tr>
		<tr>
			<th>Pincode</th>
			<td><input type="text" name="pin" required class="form-control" ></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="add" value="ADD" class="btn btn-success"></td>
		</tr>
	</table>

<?php 
}
 ?>	
	<h2>VIEW PLACE</h2>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>place</th>
			<th>Place_Description</th>
			<th>Pincode</th>
		</tr>
		<?php 
$q="select * from places";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['place_name']; ?></td>

	<td><?php echo $row['place_description']; ?></td>
	<td><?php echo $row['pincode'];?></td>
	  <td><a class="btn btn-success" href="?uid=<?php echo $row ['place_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['place_id']?>">delete</a></td>
</tr>


<?php
}
		 ?>
	</table>
	</center>

</form>
</header>
</div></section>
<?php include 'footer.php'?>
