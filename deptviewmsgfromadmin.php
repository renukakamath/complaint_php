<?php include 'deptheader.php';
extract($_GET);
  $deptid=$_SESSION['deptid'];

 ?>
 <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

<form method="post">
	<center>
		<h1>view message</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>Department Name</th>
			<th>Receiver Type</th>
			<th>Message</th>
			<th>Date</th>
		</tr>
		<?php 
		$qs="SELECT * FROM message INNER JOIN departments ON `message`.`receiver_id`=`departments`.`dept_id`WHERE `receiver_id`='$deptid' and receiver_type='department'";
		$rs=select($qs);
		foreach ($rs as $row) { ?>
			<tr>
				<td><?php echo $row['dept_name']; ?></td>
				<td><?php echo $row['receiver_type']; ?></td>
				<td><?php echo $row['message']; ?></td>
				<td><?php echo $row['date']; ?></td>

			</tr>
	<?php 
		}
		 ?>
	</table>
		</center>

</form>
</header></div></section>   

<?php include 'footer.php' ?>