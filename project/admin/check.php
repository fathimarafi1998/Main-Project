<?php
if (isset($_GET['name'])){
	$name = $_GET['name'];

	$con=mysqli_connect("localhost","root","","vegedb") or die("connectionb lost");
	$sql="SELECT * FROM `tbl_addleafyveg` where Leafname = '$name'";
	$result=mysqli_query($con,$sql)or die("query mistake");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("userilla aliya");
} 

if (isset($_GET['name1'])){
	$name = $_GET['name1'];

	$con=mysqli_connect("localhost","root","","vegedb") or die("connectionb lost");
	$sql="SELECT * FROM `tbl_addroot` where Rootname = '$name'";
	$result=mysqli_query($con,$sql)or die("query mistake");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die($sql);
} 
if (isset($_GET['name1'])){
	$name = $_GET['name1'];

	$con=mysqli_connect("localhost","root","","vegedb") or die("connectionb lost");
	$sql="SELECT * FROM `tbl_addedible` where Ediblename = '$name'";
	$result=mysqli_query($con,$sql)or die("query mistake");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die($sql);
} 
if (isset($_GET['name1'])){
	$name = $_GET['name1'];

	$con=mysqli_connect("localhost","root","","vegedb") or die("connectionb lost");
	$sql="SELECT * FROM `tbl_addcruciferous` where Cruciname = '$name'";
	$result=mysqli_query($con,$sql)or die("query mistake");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die($sql);
} 
if (isset($_GET['name1'])){
	$name = $_GET['name1'];

	$con=mysqli_connect("localhost","root","","vegedb") or die("connectionb lost");
	$sql="SELECT * FROM `tbl_addallium` where Alliumname = '$name'";
	$result=mysqli_query($con,$sql)or die("query mistake");
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die($sql);
} 

?>
