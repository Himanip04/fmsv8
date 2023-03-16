<html>
<head>
<title>add detail</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#f3e91b;">
<div class="admin_title" style="background-color:#a20000;height: 100px;padding: 10px;">
<a href="logout.php" style="float: right"><h3 style="color: #ffffff;margin-bottom: 100px;">logout</h3></a>
<h1 style="text-align: center;color:#ffffff;">welcome to admin Deshboard</h1>

</div>
<h1 style="text-align: center;">Delete the data of students!!</h1>

<?php
include ("../php/db_config.php");
$sql="select * from personal";
$result=mysqli_query($con,$sql)or die("error:database are not connected");
if(mysqli_num_rows($result)>0)
{
	echo "<table border:'2' style='border:solid 2px;width:100%;'><th>ID</th><th>NAME</th><th>FATHER'S NAME</th><th>MOTHER'S NAME</th><th>DATE OF BIRTH</th><th>AADHAR NAME</th><th>PARENTS CONTACT</th><th>ADDRESS</th><th>CATEGORY</th><th>GENDER</th><th>STANDARD</th><th>ROLL NUMBER</th><th>REGISTRATION NUMBER</th><th>PREVIOUS YEAR MARKS</th><th>DELETE</th><th>UPDATE</th>";
	while($rows=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$rows['id']."</td>";
		echo "<td>".$rows['name']."</td>";
		echo "<td>".$rows['fname']."</td>";
		echo "<td>".$rows['mnane']."</td>";
		echo "<td>".$rows['dob']."</td>";
		echo "<td>".$rows['aname']."</td>";
		echo "<td>".$rows['parents_con']."</td>";
		echo "<td>".$rows['address']."</td>";
		echo "<td>".$rows['category']."</td>";
		echo "<td>".$rows['gender']."</td>";
		echo "<td>".$rows['standard']."</td>";
		echo "<td>".$rows['roll_no']."</td>";
		echo "<td>".$rows['rnumber']."</td>";
		echo "<td>".$rows['marks']."</td>";
		//echo "<td>".$rows['file']."</td>";
		echo"<td><a href='delete.php?id=$rows[0]'>delete</a></td>";
		echo"<td><a href='update.php?id=$rows[0]'>update</a></td>";
		
		echo"</tr>";
		
		
	}
	echo"</table>";
}
?>
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql="delete  from personal where id='$id'";
	$result=mysqli_query($con,$sql)or die("error:data is not deleted");
	?>
	<script>
	alert("data are deleted sucessfully!!");
	</script>
	<?php
	
}
?>