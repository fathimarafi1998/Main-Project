<?php
if (isset($_GET['username'])){
	$username = $_GET['username'];
	$con=mysqli_connect("localhost","root","","vegdb") or die("connection moonchi");
	$sql="select * from tbl_login where username = '$username'";
	$result=mysqli_query($con,$sql)or die("query moonchi");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("user row illaathe moonchi");
} else die('user moonchal');
?>
