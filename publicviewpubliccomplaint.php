 <?php include 'publicheader.php';
  $userid=$_SESSION['userid'];

 ?>
 <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

 <center>
<h1>VIEW COMPLAINT</h1>
	<table class="table" style="width: 800px">
		<tr>
			<th>slno</th>
			<th>Department Name</th>
			<th>frist Name</th>
			<th>last Name</th>
			<th>Complaint Type </th>
			<th>Title</th>
			<th>Description</th>
			<th>Reply</th>
			<th>Date-Time</th>
	 	</tr>
		<?php 
$q="SELECT * FROM complaints INNER JOIN public_user USING(user_id)INNER JOIN departments USING (dept_id) where user_id='$userid'";
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

</tr>
<?php 
}
	  ?>
</table>


	  </center>
</header></div></section>

 <?php include 'footer.php' ?>
