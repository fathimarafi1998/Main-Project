<?php
require_once("dbconnection.php");
if(!empty($_POST["uname"]))
 {

   $a=preg_match("/^[0-9a-zA-Z]+$/",$_POST['uname']);
   if($a==1)
   {
     $query = "SELECT * FROM tbl_reg WHERE username='" . $_POST["uname"] . "'";
     $res=mysqli_query($con,$query);
     $row=mysqli_fetch_array($res);
     if(mysqli_num_rows($res)>0) {
         echo "<span class='status-not-available'> Username Already Exist.</span>";
     }else{
     }
   }
   else {
     echo "<script>alert('Please Enter Valid Username');</script>";
      }

}
?>
