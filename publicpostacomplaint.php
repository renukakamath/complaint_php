 <?php include 'publicheader.php';
  $userid=$_SESSION['userid'];
  if (isset($_POST['send'])) {
	extract($_POST);
	$q="INSERT INTO `complaints` VALUES (NULL,'$userid','$dname','$ctype','$title','$des','reply-pending',now()) ";
	$r=INSERT($q);
	alert("sended successfully");
	return redirect("publicpostacomplaint.php");
}


 ?>
 <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

 <center>
 	<h1>post complaint</h1>
 	<form method="post">
 		<table class="table" style="width: 500px">
 			<tr>
 				<th>Department Name</th>
 				<td><select name="dname">
 					<option>choose</option>
 					<?php 
 					$q="select * from departments";
 					$r=select($q);
 					foreach ($r as $row) {
 						?>
 					<option value="<?php echo $row['dept_id'] ?>">
 						<?php echo $row['dept_name'] ?>
 					</option>
<?php 					}
 					 ?>
 				</select></td>
 			</tr>
 			<tr>
 				<th>complaint Type</th>
 				<td><select name="ctype">
 					<option>choose</option>
 					<option>public</option>
 					<option>private</option>
 				</select></td>

 			</tr>
 			<tr>
 				<th>Title</th>
 				<td><input type="text" name="title" required class="form-control"></td>
 			</tr>
 			<tr>
 				<th>Description</th>
 				<td><input type="text" name="des" required class="form-control"></td>
 			</tr>
 			<tr>
 				<td align="center" colspan="2"><input type="submit" name="send" value="POST" class="btn btn-success"></td>
 			</tr>

 		</table>
 	</form>
 </center>
 <center>
<h1>VIEW COMPLAINT</h1>
	<table class="table" style="width: 800px">
		<tr>
			<th>slno</th>
			<th>Department Name</th>
			<th>frist Name</th>
			<th>last Name</th>
			<th>Compliant Type </th>
			<th>Title</th>
			<th>Description</th>
			<th>Reply</th>
			<th>Date-Time</th>
	 	</tr>
		<?php 
$q="SELECT * FROM complaints INNER JOIN public_user USING(user_id)INNER JOIN departments USING (dept_id) WHERE user_id='$userid'";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['dept_name']; ?></td>
	<td><?php echo $row['first_name']; ?></td>
	<td><?php echo $row['last_name']; ?></td>
	<td><?php echo $row['complaint_type']; ?></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['reply'];?></td>
	<td><?php echo $row['date_time'];?></td>
	<td><a class="btn btn-info" href="publicimageuploading.php?cid=<?php echo $row['complaint_id'] ?>">image uploading</a></td>

</tr>
<?php 
}
	  ?>
</table>


	  </center>
</header></div></section>
 <?php include 'footer.php' ?>
