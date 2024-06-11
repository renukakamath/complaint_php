 <?php include 'publicheader.php' ;
extract($_GET);
 ?>
 <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>
<center>
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
$q="SELECT * FROM departments INNER JOIN department_activities USING(dept_id)where dept_id='$did'";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['dept_name']; ?></td>
	<td><?php echo $row['title'];?></td>
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['activity_date'];?></td>

	 
</tr>


<?php
}
		 ?>
	</table>

<hr>
    </center>
</form>      </header></div></section>

<?php include 'footer.php' ?>
	