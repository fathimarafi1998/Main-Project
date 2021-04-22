
<?php
include("dbconnection.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone_no=$_POST['phone'];
$username=$_POST['uname'];
$password=$_POST['password'];
$pass=md5($password);
$status='1';
$usertype="user";

$r="select * from tbl_login where username='$username'";
$p=mysqli_query($con,$r);
$i=mysqli_num_rows($p);
if($i==1)
{
?>
<script>
alert("Username already exist");
location.href="registration.html";
exit;
</script>
<?php

}
else{
$r="select * from tbl_reg where email='$email'";
$p=mysqli_query($con,$r);
$i=mysqli_num_rows($p);
if($i==1)
{

?>
<script>
alert("Email already exist");
location.href="registration.html";
exit;
</script>
<?php


}

else{

$sqli="insert into tbl_login (username,password,user_type,status) values ('$username','$pass','$usertype','$status')";
$result1=mysqli_query($con,$sqli);

$n=mysqli_insert_id($con);
$sqli="insert into tbl_reg (login_id,fname,lname,email,phone_no,status) values ($n,'$fname','$lname','$email','$phone_no','$status')";
if(mysqli_query($con,$sqli))
{
header('location:login.html');
}
}}
mysqli_close($con);

?>