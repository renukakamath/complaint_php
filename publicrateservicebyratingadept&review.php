<?php include 'publicheader.php' ;
 $userid=$_SESSION['userid'];

if (isset($_POST['rate'])) 
{
  extract($_POST);
   $qi="insert into rating values(null,'$userid','$did','$rates','$review',curdate())";
  $ri=insert($qi);
 alert("rated successfully");
  return redirect("publicrateservicebyratingadept&review.php");
}



?>

 <style type="text/css">
  
  *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


</style>


<section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
<br><br><br>


<form method="POST">
  <center>
    <h2>RATE & REVIEW</h2>
    <table class="table" style="width:auto"><br><br>
      <tr>
        <th>Department Name</th>
        <td>
          <select name="did" required class="form-control">
            <option>select</option>
            <?php 
                $q="select * from departments";
                $r=select($q);

                foreach ($r as $row) 
                {
            ?>
                <option value="<?php echo $row['dept_id'] ?>"><?php echo $row['dept_name']; ?></option>

            <?php
                }
             ?>
          
        </select>
      </td>
      </tr>
      <tr>
        <th>Review</th>
        <td><input type="text" name="review" required class="form-control"></td>
      </tr>
      
      <tr>
        <th>Rate</th>
        <td>

<!-- <html>
 -->
<!-- <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
 -->
<!-- <body>
 -->  <div class="rate" >
    <input type="radio" id="star5" name="rates" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rates" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rates" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rates" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rates" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
</td>
<!-- </body>
 -->
<!-- </html>
 -->
      </tr>
      
      <tr>
        <td align="center" colspan="2"><input type="submit" name="rate" value="RATE" class="btn btn-info"></td>
      </tr>
    </table>
    <h1>VIEW REVIEW & RATING</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>slno</th>
			<th>frist Name</th>
			<th>last Name</th>
			<th>Department Name</th>
			<th>Rated</th>

			<th>Review </th>
			<th>date</th>
	 	</tr>
		<?php 
$q="SELECT * FROM public_user INNER JOIN rating USING(user_id) INNER join departments USING(dept_id) where user_id='$userid'";
$r=select($q);
$slno=1;
foreach ($r as $row) { ?>

<tr>
	<td><?php echo $slno++; ?></td>
	<td><?php echo $row['first_name']; ?></td>
	<td><?php echo $row['last_name']; ?></td>
	<td><?php echo $row['dept_name']; ?></td>
	<td><?php echo $row['review_description']; ?></td>
	<td><?php echo $row['rated_value[0-5]'];?></td>
	<td><?php echo $row['rating_date'];?></td>
	
</tr>

	 <?php 
}
	  ?>
	  </table>

  </center>

  
</form>
</header></div></section>
<?php include 'footer.php' ?>
