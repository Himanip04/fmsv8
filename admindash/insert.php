<?php
//session_start();
	//	if(isset($_SESSION['uid']))
	//	{
	//		echo "";
	//	}
		
		
?>
<html>
<head>
<title>add detail</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body bgcolor="#fffddf;">
<div class="admin_title" style="background-color:#a20000;height: 100px;padding: 10px;">
<a href="logout.php" style="float: right"><h3 style="color: #ffffff;margin-bottom: 100px;">logout</h3></a>
<h1 style="text-align: center;color:#ffffff;">welcome to admin Deshboard</h1>
</div>
<h3 style="text-align: center">Personal Detail</h3>
<form method="POST" action="">
<div class="form-group">
    <label class="control-label col-sm-2">Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="name" required="" placeholder="enter your name">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Father's Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="fname" required="" placeholder="enter your Father Name">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Mother's Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="mname" required="" placeholder="enter your Mother Name">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Date of Birth:</label>
    <div class="col-sm-10"> 
      <input type="dob" class="form-control" name="dob" required="" placeholder="enter your Date of birth">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Aadhar Number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="aname" required="" placeholder="enter your aadhar number">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">parents contact number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="parents_con" required="" placeholder="enter your contact_number">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Address:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="address" required="" placeholder="enter your address">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Category:</label>
    
      <input type="radio"  name="category" required="" >General
	  <input type="radio"  name="category" required="" >OBC
	  <input type="radio"  name="category" required="" >SC
	  <input type="radio" name="category" required="" >ST
    </div>
	<label class="control-label col-sm-2">Gender:</label>
    
      <input type="radio"  name="gender" required="" >Male
	  <input type="radio"  name="gender" required="" >Female
	  <input type="radio"  name="gender" required="" >other
	 <br><br>
	 <b><h3>Academic detail</h3></b>
	 <div class="form-group">
    <label class="control-label col-sm-2">standard:</label>
    <div class="col-sm-10"> 
      <input type="input" class="form-control" name="standard" required="" placeholder="enter standard">
	  </div>
	  </div>
	  <br><br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Roll Number:</label>
    <div class="col-sm-10"> 
      <input type="number" class="form-control" name="roll_no" required="" placeholder="enter your roll number">
    </div>
	</div>
	<br><br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Registration Number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="rnumber" required="" placeholder="enter your registration Number">
    </div>
	</div>
	<br><br><br>
	<div class="form-group">
	 <label class="control-label col-sm-2">Previous year Marks:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="marks" required="" placeholder="enter Previous year marks">
    </div>
	</div>
	<input type="submit" name="submit"/>
	
	</form>	
<?php

if(isset($_POST['submit']))
{
	include ("../php/db_config.php");

	
	
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$dob=$_POST['dob'];
	$aname=$_POST['aname'];
	$parents_con=$_POST['parents_con'];
	$address=$_POST['address'];
	$category=$_POST['category'];
	$gender=$_POST['gender'];
	$standard=$_POST['standard'];
	$roll_no=$_POST['roll_no'];
	$rnumber=$_POST['rnumber'];
	$marks=$_POST['marks'];
	
     
	  
	$sql="insert into personal values('','$name','$fname','$mname','$dob','$aname','$parents_con','$address','$category','$gender','$standard','$roll_no','$rnumber','$marks')";
	$result=mysqli_query($con,$sql)or die("database not connected properly");


	if($result==true)
	{
		
	?>
	<script>
	alert("data inserted sucessfully")
	</script>
	<?php
	}

	}
	

?>
</body>
</html>
