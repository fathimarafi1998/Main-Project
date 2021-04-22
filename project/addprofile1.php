<?php
session_start();
include("dbconnection.php");
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phone_no=$_POST["phone"];
$username=$_POST["uname"];
$user_type="user";
$status=1;
$temp=$_SESSION['uname'];

$h="select login_id from tbl_login where username='$temp'";
$res=mysqli_query($con,$h);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sq="update tbl_reg set fname='$fname',lname='$lname',
phone_no='$phone',email='$email' where login_id='$b'";
mysqli_query($con,$sq);
$a="update tbl_login set username='$username' where username='$temp'";
if(mysqli_query($con,$a))
{
	$_SESSION['uname']=$username;
  ?>
  <script>alert("Profile Updated Successfully");
  location.href="user/index.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>