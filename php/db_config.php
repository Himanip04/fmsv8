<?php
$con = new mysqli('localhost', 'root', '', 'fms');
if($con==true)
{
	echo "database connected properly";
}
?>