<?php include 'header.php';
if (isset($_POST['register'])) {
	extract($_POST);
	$qi="INSERT INTO login VALUES(NULL,'$uname','$pwd','user')";
	$ri=INSERT($qi);
	 $q="INSERT INTO public_user VALUES(NULL,'$ri','$placeid','$fname','$lname','$hname','$phone','$email') ";
	$r=INSERT($q);
	alert("registered successfully");
	return redirect("publicregister.php");
}

?>
<center>

<form method="POST">
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">

 <h1>Registration</h1>

<table class="table" style="width:500px;color: green">
<tr>
	<th>Place</th>
<td>
	<select name="placeid" >
		<option >select </option>
		<?php 
$q="select * from places";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<option value="<?php echo $row['place_id']?>" >
<?php echo $row['place_name'] ?>
</option>
<?php
}
		 ?>
		
	</select>
</td>

</tr>

<tr>
<th>FirstName</th>
<td><input type="text" name="fname" required class="form-control"></td>
</tr>
<tr>
<th>LastName</th>
<td><input type="text" name="lname" required class="form-control"></td>
</tr>
<tr>
<th>House_name</th>
<td><input type="text" name="hname" required class="form-control"></td>
</tr>                 
<tr>
<th>Phone</th>
<td><input type="number" name="phone" required class="form-control"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="text" name="email" required class="form-control"></td>
</tr>

<tr>
<th>username</th>
<td><input type="text" name="uname" required class="form-control"></td>
</tr>
<tr>
<th>password</th>
<td><input type="password" name="pwd" required class="form-control"></td>
</tr>
<tr>
	 <td align="center" colspan="2"><input type="submit" name="register" value="REGISTER" class="btn btn-success"></td>
 </tr>
        </table>

    </header>
</div>
</section>
    </center>
</form>      
<?php include 'footer.php' ?>









