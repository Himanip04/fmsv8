<html>
<head>
	<title>update home</title>
</head>	


<body bgcolor="#fffddf;">
<div class="admin_title" style="background-color:#a20000;height: 100px;padding: 10px;">
<a href="logout.php" style="float: right"><h3 style="color: #ffffff;margin-bottom: 100px;">logout</h3></a>
<h1 style="text-align: center;color:#ffffff;">welcome to admin Deshboard</h1>

</div>
<h1 style="text-align: center;">Update the data of students!!</h1>


<?php
include ("../php/db_config.php");
Session_start();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$_SESSION['id']=$id;
	$sql="select * from personal where id='$id'";
	$result=mysqli_query($con,$sql)or die("Error:database are not connected");
	if(mysqli_num_rows($result)>0)
	{
		while($rows=mysqli_fetch_array($result))
		{
			$id=$rows['id'];
			$name=$rows['name'];
	$fname=$rows['fname'];
	$mnane=$rows['mnane'];
	$dob=$rows['dob'];
	$aname=$rows['aname'];
	$parents_con=$rows['parents_con'];
	$address=$rows['address'];
	$category=$rows['category'];
	$gender=$rows['gender'];
	$standard=$rows['standard'];
	$roll_no=$rows['roll_no'];
	$rnumber=$rows['rnumber'];
	$marks=$rows['marks'];
	
			//$file=$rows['file'];
			
			$_SESSION['roll_no']=$roll_no;
			$_SESSION['name']=$name;
			$_SESSION['fname']=$fname;
			$_SESSION['mnane']=$mnane;
			$_SESSION['dob']=$dob;
			$_SESSION['aname']=$aname;
			$_SESSION['parents_con']=$parents_con;
			$_SESSION['address']=$address;
			$_SESSION['category']=$category;
			$_SESSION['gender']=$gender;
			$_SESSION['standard']=$standard;
			$_SESSION['roll_no']=$roll_no;
			$_SESSION['rnumber']=$rnumber;
			$_SESSION['marks']=$marks;
			//$_SESSION['file']=$file;
			
		}
	}
}

?>

<h3 style="text-align: center">Personal Detail</h3>
<form method="POST" action="">
<div class="form-group">
    <label class="control-label col-sm-2">Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['name']; ?> " >
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Father's Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['fname']; ?> ">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Mother's Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="mname" value="<?php echo $_SESSION['mnane']; ?> ">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Date of Birth:</label>
    <div class="col-sm-10"> 
      <input type="dob" class="form-control" name="dob" value="<?php echo $_SESSION['dob']; ?> ">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Aadhar Number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="aname" value="<?php echo $_SESSION['aname']; ?> ">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">parents contact number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="parents_con" value="<?php echo $_SESSION['parents_con']; ?> ">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Address:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="address" value="<?php echo $_SESSION['address']; ?> ">
    </div>
	</div>
	<br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Category:</label>
    
      <input type="radio"  name="category" required=""  value="<?php echo $_SESSION['category']; ?> ">General
	  <input type="radio"  name="category" required="" value="<?php echo $_SESSION['category']; ?> " >OBC
	  <input type="radio"  name="category" required="" value="<?php echo $_SESSION['category']; ?> ">SC
	  <input type="radio" name="category" required="" value="<?php echo $_SESSION['category']; ?> " >ST
    </div>
	<label class="control-label col-sm-2">Gender:</label>
    
      <input type="radio"  name="gender" required="" value="<?php echo $_SESSION['gender']; ?> ">Male
	  <input type="radio"  name="gender" required="" value="<?php echo $_SESSION['gender']; ?> ">Female
	  <input type="radio"  name="gender" required="" value="<?php echo $_SESSION['gender']; ?> " >other
	 <br><br>
	 <b><h3>Academic detail</h3></b>
	 <div class="form-group">
    <label class="control-label col-sm-2">standard:</label>
    <div class="col-sm-10"> 
      <input type="input" class="form-control" name="standard" value="<?php echo $_SESSION['standard']; ?> ">
	  </div>
	  </div>
	  <br><br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Roll Number:</label>
    <div class="col-sm-10"> 
      <input type="number" class="form-control" name="roll_no" value="<?php echo $_SESSION['roll_no']; ?> ">
    </div>
	</div>
	<br><br><br>
	<div class="form-group">
    <label class="control-label col-sm-2">Registration Number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="rnumber" value="<?php echo $_SESSION['rnumber']; ?> ">
    </div>
	</div>
	<br><br><br>
	<div class="form-group">
	 <label class="control-label col-sm-2">Previous year Marks:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="marks" value="<?php echo $_SESSION['marks']; ?> ">
    </div>
	</div>
	<input type="submit" name="update" value="update"/>
	
	</form>	<?php

if(isset($_POST['update']))
{
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
	//$file=$_POST['file'];
	$x=$_SESSION['id'];
	$sql="update personal set name='$name',fname='$fname',mnane='$mnane',dob='$dob',aname='$aname' ,parents_con='$parents_con',address='$address',category='$category',gender='$gender',standard='$standard',roll_no='$roll_no',rnumber='$rnumber',marks='$marks' where id='$x' " ;
	$result=mysqli_query($con,$sql)or die("Error:your data were not updated");
	?>
	<script>
	alert( "your data has been update sucessfully");
	</script>
	<?php	
	}
?>
</body>
</html>