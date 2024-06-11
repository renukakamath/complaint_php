<?php include 'staffheader.php';
extract($_GET);

if (isset($_POST['send'])) 
{
	extract($_POST);
	$q="update `complaints` set reply='$reply' where complaint_id='$cid'";
	update($q);
	alert("replied");
	return redirect("staffviewcomplaint.php");
}
 ?>
<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>

<center>
	<form method="post">
		<h1>Reply</h1>
		<table class="table" style="width: 500px">
			<tr>
				<th>Reply</th>
				<td><input type="text" name="reply" required class="form-control"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="send" value="SEND" class="btn btn-success"></td>
			</tr>
		</table>
	</form>
	  </center>
	</header>
</div></section>
<?php include 'footer.php'?>





