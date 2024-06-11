<?php include 'staffheader.php';

 $staffid=$_SESSION['staffid'];

 ?>
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>
<center>
<h1>VIEW WORK</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Work</th>
			<th>Description</th>
			<th>Date</th>
	 	</tr>
		<?php 
 $q="SELECT * FROM `works` INNER JOIN `staff`  USING (`staff_id`) where staff_id='$staffid'";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['firstname']; ?></td>
	<td><?php echo $row['lastname']; ?></td>
	<td><?php echo $row['work']; ?></td>
	<td><?php echo $row['description']; ?></td>
	<td><?php echo $row['date'];?></td>
	<td><a class="btn btn-warning" href="staffuploadwork.php?wid=<?php echo $row['work_id'] ?>">upload work</a></td>
	
</tr>

	 <?php 
}
	  ?>
	  </table>
	  </center></header>
</div></section>
<?php include 'footer.php'?>





