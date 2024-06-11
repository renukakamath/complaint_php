<?php include 'staffheader.php';
extract($_GET);
 $staffid=$_SESSION['staffid'];


if (isset($_POST['upload'])) {
	extract($_POST);
	$path="uploads/".$_FILES['fpath']['name'];
	$nam=uniqid();
	$filetype=strtolower(pathinfo($path,PATHINFO_EXTENSION));
	$eqp="uploads/".$nam.".".$filetype;
	move_uploaded_file($_FILES['fpath']['tmp_name'], $eqp);
	
	$q="insert into uploadwork values(null,'$wid','$eqp',curdate()) ";
	insert($q);
	alert("uploaded successfully");
	return redirect("staffuploadwork.php");
}

 ?>
<form method="POST" enctype="multipart/form-data">
	<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

	<center>
		<h1>UPLOAD WORK</h1>
		<table class="table" style="width: 500px">
			<tr>
				<th>FilePath</th>
				<td><input type="file" name="fpath"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="upload" value="UPLOAD" class="btn btn-success"></td>
			</tr>
		</table>
	</center>
</form>
<center>
<h1>VIEW UPLOAD WORK</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>Work</th>
			<th>FilePath</th>
			<th>Date</th>
	 	</tr>
		<?php 
$q="SELECT * FROM `works` INNER JOIN `uploadwork`  USING (`work_id`) inner join staff using (staff_id) where work_id='$wid' ";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['work']; ?></td>
	<td><img src="<?php echo $row['filepath']; ?>"></td>
	<td><?php echo $row['date'];?></td>
	
</tr>

	 <?php 
}
	  ?>
	  </table>
	  </center>
	  </header>
</div></section>
<?php include 'footer.php'?>





