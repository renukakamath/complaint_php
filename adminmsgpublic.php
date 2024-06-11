<?php include 'adminheader.php';
		extract($_GET);

	if (isset($_POST['send'])) 
	{
		extract($_POST);
		$q="insert into message values(null,'$uid','user','$msg',curdate())";
		$r=insert($q);
		alert("send successfully");
		return redirect("adminmsgpublic.php");
	}

 ?>
<center>
	<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">

<form method="post">
	<br><br>
	<h1>message</h1>

		<table class="table" style="width: 500px">
			<tr>
				<th>Message</th>
				<td><input type="text" name="msg"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="send" value="SEND" class="btn btn-success"></td>
			</tr>
		</table>
		<h1>view message</h1>
	<table class="table" style="width:500px;">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Receiver Type</th>
			<th>Message</th>
			<th>Date</th>
		</tr>
		<?php 
		 $qs="SELECT * FROM message INNER JOIN public_user ON `message`.`receiver_id`=`public_user`.`user_id`WHERE `receiver_id`='$uid' and receiver_type='user'";
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
</header>
</div>
</section>
<?php include 'footer.php' ?>