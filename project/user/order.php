<?php
session_start();

$con=mysqli_connect("localhost","root","","vegdb") or die("could'nt connect");
$b=$_SESSION['uname'];
$abc="select login_id from tbl_login where username='$b'";
$query=mysqli_query($con,$abc);
$result=mysqli_fetch_array($query);

$c=$result['login_id'];

$housename=$_POST['hname'];
$place=$_POST['place'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$landmark=$_POST['landmark'];
$status=1;

$sq="insert into tbl_address(login_id,housename,place,district,pincode,landmark,status) values('$c','$housename','$place','$district','$pincode','$landmark','$status')";
mysqli_query($con,$sq);

header('location:payment.html');

mysqli_close($con);
?>