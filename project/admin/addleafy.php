<?php
 session_start();
 $con=mysqli_connect("localhost","root","","vegdb") or die("couldn't connect");
$name=$_POST['bname'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];

$file=$_FILES['photo']['name']; 
$fileloc = "upload/";

move_uploaded_file($_FILES["photo"]["tmp_name"],$fileloc.$file);
$sqli="insert into tbl_addleafyveg(Leafname,quantity,price,image) values ('$name','$quantity','$price','$file')";

if(mysqli_query($con,$sqli))
{
header("location:form1.php");
}
mysqli_close($con);
?>