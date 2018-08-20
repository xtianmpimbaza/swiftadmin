<?php
	include('conn.php');

	$name=$_POST['name'];
	$code=$_POST['code'];
	$type=$_POST['type'];
	$biz_name=$_POST['biz_name'];
	$location=$_POST['location'];
	
	mysqli_query($conn,"insert into merchants (merchant_name, merchant_code, m_business_type, m_business_name, m_location) values ('$name', '$code','$type', '$biz_name', '$location')");
	header('location:index.php');
?>