<?php include 'adminheader.php' ;

if (isset($_POST['add'])) 
{
	extract($_POST);
	$q="insert into `rule_regulations` values(null,'$title','$des')";
	$r=insert($q);
	alert("added");
	return redirect("adminmanagerule.php");
}
if (isset($_GET['did']))
{
	extract($_GET);
	$qd="delete from rule_regulations where rule_id='$did'";
	$rd=delete($qd);
	alert("deleted");
	return redirect("adminmanagerule.php");
}
if (isset($_GET['uid']))
{
	extract($_GET);
	$qs="select * from rule_regulations where rule_id='$uid'";
	$rs=select($qs);
	
}
if (isset($_POST['update']))
{
	extract($_POST);
echo	$qu="UPDATE  rule_regulations SET `title`='$title',description='$des' WHERE rule_id='$uid'";
	 $ru=update($qu);
	 alert("updated");
  return redirect("adminmanagerule.php");
}





?>
	<center>
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

<form method="post">
<?php 
if (isset($_GET['uid'])) {
	# code...

 ?>
 		<h1>UPDATE MANGE RULES & REGULATIONS</h1>

	<table class="table" style="width:500px">
		
		<tr>
			<th>place</th>
			<td><input type="text" name="title" required class="form-control" value="<?php echo $rs[0]['title'] ?>"></td>
		</tr>
		<tr>
			<th> Description</th>
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
		<h1>MANGE RULES & REGULATIONS</h1>

	<table class="table" style="width: 500px">
		
		<tr>
			<th>place</th>
			<td><input type="text" name="title" required class="form-control"></td>
		</tr>
		<tr>
			<th> Description</th>
			<td><input type="text" name="des" required class="form-control" ></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="add" value="ADD" class="btn btn-success"></td>
		</tr>
	</table>

<?php 
}
 ?>	
	<h1>VIEW RULES & REGULATIONS</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>Title</th>
			<th>Description</th>
		</tr>
		<?php 
$q="select * from rule_regulations";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['title']; ?></td>

	<td><?php echo $row['description']; ?></td>
	  <td><a class="btn btn-success" href="?uid=<?php echo $row ['rule_id']?>">update</a></td>
  <td><a class="btn btn-danger" href="?did=<?php echo $row['rule_id']?>">delete</a></td>
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