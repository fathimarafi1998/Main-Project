<?php
session_start();
$con=mysqli_connect("localhost","root","","vegdb") or die("couldn't connect");

$username=$_POST["uname"];
$password=$_POST["pass"];
$pass=md5($password);

$sql="select * from tbl_login where username='$username' and password='$pass' and status='1'";
$result=mysqli_query($con,$sql)or die($sql);
$n=mysqli_num_rows($result);


if($n>0) 
{
	while($row=mysqli_fetch_array($result))
	{
		if($row['user_type']=='user')
		{
			$_SESSION['uname']=$username;
			$_SESSION['type']='user';
			header("location:user/index.php");

		}
		if($row['user_type']=='admin')
		{
			$_SESSION['uname']=$username;
			$_SESSION['type']='admin';
			header("location:admin/table.php");
		}


	}


}
else
{
?>
<script>
alert("Invalid username or password");
//location.href("login.html");

</script>
<?php
header("location:login.html");
}

mysqli_close($con);
?>
