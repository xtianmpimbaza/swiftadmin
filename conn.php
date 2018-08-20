<?php
 
//MySQLi Procedural
//$conn = mysqli_connect("localhost","root","","swiftpay");
$conn = mysqli_connect("localhost","root","root#123","swiftpay");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>