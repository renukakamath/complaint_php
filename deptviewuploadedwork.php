<?php include 'deptheader.php';
extract($_GET);
 ?>
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

<center>
<h1>VIEW UPLOAD WORK</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>Work</th>
			<th>FilePath</th>
			<th>Date</th>
	 	</tr>
		<?php 
$q="SELECT * FROM `works` INNER JOIN `uploadwork`  USING (`work_id`) where work_id='$wid'";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['work']; ?></td>
	<td><img src="<?php echo $row['filepath']; ?>"></td>
	<td><?php echo $row['date'];?></td>
	
</tr>

	 <?php 
}
	  ?>
	  </table>
	  </center></header>
</div></section>
<?php include 'footer.php'?>





