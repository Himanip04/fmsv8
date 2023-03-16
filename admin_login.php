
<!DOCTYPE html>
<!doctype html>
<html lang="en">
	<head>
		<title>FMS | Homepage</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<!-- shortcut-icon -->
		<link rel="shortcut icon" href="/img/favicon.png"><!-- /shortcut-icon -->
		<!-- custom-stylesheet -->
		<link rel="stylesheet" href="/css/main.css" type="text/css"><!-- /custom-stylesheet -->
		<!-- font-awesome-icons -->
		<link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css"><!-- /font-awesome-icons -->
	</head>
	<style>
		body
		{
			background-image:url(admindash/img/3.jpg);
		}
	</style>

	<body class="p-0">
		<!-- intruder -->
		<?php require 'templates/intruder.php'; ?>
		<?php require 'templates/no_authority.php'; ?>
		<?php //unset($_SESSION['noAuthority']); ?>
		<?php //unset($_SESSION['intruder']); ?>
		<!-- /intruder -->

		<!-- jumbotron -->
		<div class="jumbotron jumbotron-fluid bg-dark text-light">
			<div class="container text-sm-center">
				<i class="fa fa-ravelry fa-5x" aria-hidden="true"></i>
		   		<h1><b>School Management System</b></h1>
		    	<p class="lead text-success"><q>Customized School Fee Management System</q> is an online Fee Management System that can be used by any school that wants to update their manual or existing automated fee system.</p>
				<a href="admin_login.php"><button>admin login</button></a>
			</div>
		</div><!-- /jumbotron -->
		<div class="row">
			<div class="col-sm-6">
			<h3 style="margin-left: 150px;"><b style="color: #ffffff;">Admin Login</b></h3>
			<form class="form-horizontal" action="" method="POST" style="border: 3;">
  <div class="form-group">
    <label class="control-label col-sm-2" name="username"><b style="background-color: #ffffff;">username: </b></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"><b style="background-color: #ffffff;">Password: </b></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </div>
	</div>
</form>
<?php
					require('php/db_config.php');
  
    // If form submitted, insert values into the database.
    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripslashes($username);
    //    $username = mysqli_real_escape_string($_POST['username']);

        $password = stripslashes($password);
   //     $password = mysqli_real_escape_string($_POST['password']);

        //Checking is user existing in the database or not
        $sql = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $result = mysqli_query($con,$sql) or die("database not work properly");
        $rows = mysqli_num_rows($result);

        if($rows==1)
        {
          $_SESSION['username'] = $username;
		  $_SESSION['password'] = $password;
          header("Location:admindash/admindash.php");
        }
        else
        {
          ?>
          <script>
            alert('Invalid Keyword, please try again.');
            window.location.href='admin_login.php';
          </script>
          <?php
        }
		}
    
?>
</div>
<div class="col-sm-6">
<h3><b style="color: #ffffff;margin-left: 150px;">Find student detail</b></h3>
<form class="form-horizontal" action="" method="POST" style="border: '3';">
  <div class="form-group">
    <label class="control-label col-sm-2" ><b style="background-color: #ffffff">R Number: </b></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="rnumber" placeholder="Enter registration number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"><b style="background-color: #ffffff;">Standard </b></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="standard" placeholder="Enter standard">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="find">Submit</button>
    </div>
	</div>
</form>
<?php
session_start();
require('php/db_config.php');
if(isset($_POST['find']))
{
	$rnumber=$_POST['rnumber'];
	$standard=$_POST['standard'];	
	//$x=$_SESSION['id'];
	$sql="select * from personal where rnumber='$rnumber'&& standard='$standard'";
	$result=mysqli_query($con,$sql)or die ("something went wrong");
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
			
			echo "<table border='1' style='width:100%;border:solid 2px;background-color:#ffffff;'>";
			echo "<tr>";
			echo "<td>ROLL NO</td>";
			echo "<td>".$roll_no."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>NAME</td>";
			echo "<td>".$name."</td>";
			echo "</tr>";
			echo "<tr>";
			
			echo "<tr>";
			echo "<td>FATHER's NAME</td>";
			echo "<td>".$fname."</td>";
			echo "</tr>";
			echo "<tr>";
			
			echo "<tr>";
			echo "<td>MOTHER's NAME</td>";
			echo "<td>".$mnane."</td>";
			echo "</tr>";
			echo "<tr>";
			
			echo "<tr>";
			echo "<td>DATE OF BIRTH</td>";
			echo "<td>".$dob."</td>";
			echo "</tr>";
			echo "<tr>";
			
			echo "<tr>";
			echo "<td>AADHAR NUMBER</td>";
			echo "<td>".$aname."</td>";
			echo "</tr>";
			echo "<tr>";
			
			echo "<tr>";
			echo "<td>PARENTS CONTACT NUMBER</td>";
			echo "<td>".$parents_con."</td>";
			echo "</tr>";
			echo "<tr>";
			
			echo "<tr>";
			echo "<td>ADDRESS</td>";
			echo "<td>".$address."</td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>STANDARD</td>";
			echo "<td>".$standard."</td>";
			echo "</tr>";
			
			
			echo "<tr>";
			echo "<td>Roll number</td>";
			echo "<td>".$roll_no."</td>";
			echo "</tr>";
			echo "<tr>";
			
			echo "<tr>";
			echo "<td>REGISTRATION NUMBER</td>";
			echo "<td>".$rnumber."</td>";
			echo "</tr>";
			echo "</table>";
					
		}
		}
		else
		{
			?>
			<script>
				alert("data are not matched!!");
			</script>
			<?php
		}
	
	
}
?>
</div>
</div>
</body>
</html>

			
					
					
									
			


		

	