<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","root#123","sample");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>