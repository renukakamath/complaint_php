<?php include 'staffheader.php' ?>
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

<center>
<h1>VIEW ACTIVITY</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>Department Name</th>
			<th>Title</th>
			<th>Description</th>
			<th>Activity Date</th>
	 	</tr>
		<?php 
$q="SELECT * FROM `department_activities` INNER JOIN `departments` USING (`dept_id`)";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['dept_name']; ?></td>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['description']; ?></td>
	<td><?php echo $row['activity_date'];?></td>
	
</tr>

	 <?php 
}
	  ?>
	  </table>
	  </center>
	  </header>
</div></section>
<?php include 'footer.php'?>





