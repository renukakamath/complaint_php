<?php include 'adminheader.php' ?>





<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
        	 <center>

      <br> <br> <h1>VIEW DEPARTMENTS</h1> <table class="table" style="width:
500px"> 
<tr> <th>slno</th> <th>place</th> <th>Department Name</th>
<th>Phone</th> <th>Email</th> <th>Description</th>

		</tr>
		<?php 
$q="SELECT * FROM departments INNER JOIN places USING(place_id)";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['place_name']; ?></td>
	<td><?php echo $row['dept_name']; ?></td>
	<td><?php echo $row['phone'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['description'];?></td>

	  <td><a class="btn btn-success" href="adminmsgdept.php?did=<?php echo $row ['dept_id']?>">message</a></td>
  
</tr>


<?php
}
		 ?>
	</table>


    </center>
 


 </div>
 </section> 
     

<?php include 'footer.php' ?>
