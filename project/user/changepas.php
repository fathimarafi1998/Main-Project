<?php
session_start();
if(!isset($_SESSION['uname']) or $_SESSION['type']!='user')
{
header('location:../login.html');
}
if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>REGISTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	  <style>
      .status-available{color:#2FC332;}
      .status-not-available{color:#D60202;}
      </style>
	
	  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script>
       
        

		function validate4()
        {
        var password = document.getElementById("pass").value;
        var pass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{6,}/;
         if(!password.match(pass))
        {
         alert("Please enter valid password");
         document.getElementById("pass").value="";
        }
		else if(password=="")
		{
		alert ("password can't be blank");
		}
        }
        function validcpass()
          {
          var password=document.getElementById("pass").value;
          var cpass=document.getElementById("cpawd").value;
          if(!(password==cpass))
          {
           alert("Password not matching");
           document.getElementById("cpawd").value="";
          }
           }
		   
		</script>
	
  

     
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		
		  </div>
    </div>
    
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');  height: 30px;">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	
 
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	
        <div class="row block-9">
          <div class="col-md-9 order-md-last d-flex">
		  <div class="col-md-5 d-flex">
          	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');"></div>
          </div>
		  <div>
		  
            <form method="POST" name="regform" action="changepass1.php" class="bg-white p-5 contact-form">
			<center><h2 class="title">CHANGE PASSWORD</h2></center><br>
		<div class="modal-body">
<form method="POST" action="changepass1.php">
  <?php
  include("dbconnection.php");
  $sq="select * from tbl_login where username='$temp'";
  $res=mysqli_query($con,$sq);
  $a=mysqli_fetch_array($res);
  ?>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="uname" id ="uname1" onblur="validate()" value="<?php echo $a['username']; ?>" required>
              </div><br><div class="form-group">
                <input type="password" class="form-control" placeholder="Old Password" name="password" id ="pass"  value="<?php echo $a['password']; ?>" required>
              </div><br>
             
			  <div class="form-group">
                <input type="password" class="form-control" placeholder="New Password" name="password" id ="pass"  required>
              </div><br>
			  <div class="form-group">
                <input type="password" class="form-control" type="password" placeholder="Confirm Password" name="password1" id ="cpawd"  required>
              </div><br>
              
              <div class="form-group">
                <input type="submit" value="CLOSE" class="btn btn-primary py-3 px-5"> 
				 <input type="submit" value="UPDATE" class="btn btn-primary py-3 px-5">
              </div>
			  
            </form>
          
          </div>

          
        </div>
      </div>
    </section>

    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<?php
}
else
{
header("location:login.html");
}
?>