<?php include 'staffheader.php'?>
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

<center>
<h1>VIEW REVIEW & RATING</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>Department</th>
			<th>frist Name</th>
			<th>last Name</th>
			<th>Review </th>
			<th>Rated</th>
			<th>date</th>
	 	</tr>
		<?php 
$q="SELECT * FROM public_user INNER JOIN rating USING(user_id)INNER JOIN `departments` USING (`dept_id`)";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['dept_name']; ?></td>
	<td><?php echo $row['first_name']; ?></td>
	<td><?php echo $row['last_name']; ?></td>
	<td><?php echo $row['review_description']; ?></td>
	<td><?php echo $row['rated_value[0-5]'];?></td>
	<td><?php echo $row['rating_date'];?></td>
	
</tr>

	 <?php 
}
	  ?>
	  </table>
	  </center>
	  </header>
</div></section>
<?php include 'footer.php'?>



