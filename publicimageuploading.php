<?php include 'publicheader.php';
extract($_GET);

if (isset($_POST['upload'])) {
	extract($_POST);

	$path="uploads/".$_FILES['image']['name'];
	$nam=uniqid();
	$filetype=strtolower(pathinfo($path,PATHINFO_EXTENSION));
	$eqp="uploads/".$nam.".".$filetype;
	move_uploaded_file($_FILES['image']['tmp_name'], $eqp);
	
	$q="insert into complaint_iamages values(null,'$cid','$eqp',curdate()) ";
	insert($q);
	//alert("uploaded successfully");
	//return redirect("publicimageuploading.php");

}

 ?>
 <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

 <form method="post" enctype="multipart/form-data">
 	<center>
 		<h1>IMAGE UPLOADING</h1>
 		<table class="table" style="width: 500px">
 			<tr>
 				<th>File path</th>
 				<td><input type="file" name="image" required class="form-control"></td>
 			</tr>
 			<tr>
 				<td align="center" colspan="2"><input type="submit" name="upload" value="UPLOAD"></td>
 			</tr>
 		</table>
 		<table class="table" style="width: 500px">
 		<h1>view uploads</h1>
 		<tr>
 			<th>file path</th>
 			<th>date</th>
 		</tr>
 		<?php 
 		$q="SELECT * FROM`complaint_iamages` INNER JOIN complaints USING(complaint_id) WHERE complaint_id='$cid' ";
 		$r=select($q);
 		foreach ($r as $row) { ?>
 			<tr>
 				<td ><img src="<?php echo $row['path']; ?> "></td>
 				<td><?php echo $row['date_time']; ?></td>
 			</tr>
<?php 		}
 		 ?>
 		 </table>
 	</center>
 </form></header></div></section>


<?php include 'footer.php' ?>