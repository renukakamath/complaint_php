 <?php include 'publicheader.php';
extract($_GET);
 $userid=$_SESSION['userid'];

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
			<th>First Name</th>
			<th>Last Name</th>
			<th>Receiver Type</th>
			<th>Message</th>
			<th>Date</th>
		</tr>
		<?php 
		$qs="SELECT * FROM message INNER JOIN public_user ON `message`.`receiver_id`=`public_user`.`user_id`WHERE `receiver_id`='$userid' AND receiver_type='user'";
		$rs=select($qs);
		foreach ($rs as $row) { ?>
			<tr>
				<td><?php echo $row['first_name']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
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