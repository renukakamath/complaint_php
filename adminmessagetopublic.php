<?php include 'adminheader.php'?>


<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">

	<br><br>
	<form method="post">
	<center>
<h1>VIEW PUBLIC</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>place</th>
			<th>frist Name</th>
			<th>last Name</th>
			<th>House Name</th>
			<th>Phone</th>
			<th>Email</th>
		</tr>
		<?php 
$q="select * from public_user inner join places using(place_id)";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['place_name']; ?></td>
	<td><?php echo $row['first_name']; ?></td>
	<td><?php echo $row['last_name']; ?></td>
	<td><?php echo $row['house_name']; ?></td>
	<td><?php echo $row['phone'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><a class="btn btn-success" href="adminmsgpublic.php?uid=<?php echo $row ['user_id']?>">message</a></td>
  
</tr>
<?php }?>
</table>

</center>
</form>


  </div>
 </section> 




<?php include 'footer.php'?>



