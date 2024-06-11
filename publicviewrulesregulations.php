 <?php include 'publicheader.php' ?>
 <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

	<center>

	<h1>View Rules & Regulations</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>Title</th>
			<th>Description</th>
		</tr>
		<?php 
$q="select * from rule_regulations";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['description']; ?></td>
	 
</tr>
<?php 
}
 ?>
</table>
</center></header></div></section>

<?php include 'footer.php'?>