<?php
include('conn.php');

$id = $_GET['id'];

$name = $_POST['name'];
$code = $_POST['code'];
$type = $_POST['type'];
$biz_name = $_POST['biz_name'];
$location = $_POST['location'];

//merchant_name, merchant_code, m_business_type, m_business_name, m_location

mysqli_query($conn, "update merchants set merchant_name='$name', merchant_code='$code', m_business_type='$type', m_business_name='$biz_name', m_location='$location' where id='$id'");
header('location:index.php');

?>