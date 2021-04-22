<?php
 session_start();
$con=mysqli_connect("localhost","root","","tour");
$fName=$_POST["fname"];
$lName=$_POST["lname"];
$address=$_POST["address"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];
$Email_id=$_POST["email"];
$phone=$_POST["phone"];
$Username=$_POST["username"];
$Password=$_POST["password"];
$Usertype="user";
$status=1;
$r="select * from login_tbl where username='$Username'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Username already exists");
location.href="register.html";
 exit;
</script>
<?php
}
else
{
$sqli="insert into login_tbl (username,password,usertype,status) values ('$Username','$Password','$Usertype','$status')";
$result1=mysqli_query($con,$sqli);
$n=mysqli_insert_id($con);
$sq="insert into reg_table(login_id,fname,lname,address,district,pincode,email,phoneno,status) values('$n','$fName','$lName','$address','$district','$pincode','$Email_id','$phone','$status')";
if(mysqli_query($con,$sq))
{
    header("location:login1.html");
}
}
mysqli_close($con);
?>
