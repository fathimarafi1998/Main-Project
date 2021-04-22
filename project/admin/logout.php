<?php
session_start();
session_destroy();
if(isset($_session['uname']))
{

}
header("location:../login.html");
exit();
?>
