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
        function validate()
        {
        var name=document.getElementById("name1").value;
        var letters=/^[a-zA-Z\s]*$/;
        if(!name.match(letters))
        {
        alert("Please enter valid name");
        document.getElementById("name1").value="";
        }
		else if(name=="")
		{
		alert ("first name can't be blank");
		}
        }
        function validate6()
        {
        var name=document.getElementById("name2").value;
        var letters=/^[a-zA-Z\s]*$/;
        if(!name.match(letters))
        {
        alert("Please enter valid name");
        document.getElementById("name2").value="";
        }
		else if(name=="")
		{
		alert ("last name can't be blank");
		}
        }
        
        function validate2()
        {
        var phone = document.getElementById("phno").value;
        var ph=/^(9|8|7|6)[0-9]{9}$/;
         if(!phone.match(ph))
        {
        alert("enter valid phone number");
        document.getElementById("phno").value="";
        }
		else if(phone=="")
		{
		alert ("phone number can't be blank");
		}
        }
        function validate1()
        {
        var email=document.getElementById("em").value;
        var pat=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+?\.[a-zA-Z]{2,4}$/;
         if(!email.match(pat))
        {
        alert("Please enter valid email");
        document.getElementById("em").value="";
        }		
        }
		
		function che() {
		var email = document.getElementById('em').value;
        if (!email) return;
        console.log("WORKING EMAIL TILL HERE");
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200 ){
            console.log(this.response); //helps SEE WHATS GOING ON in the php file;
            if(this.response=='TRUE'){
                document.getElementById('maile').innerHTML="Email is taken once";
                document.getElementById('em').value="";
                document.forms["regform"]["email"].focus();
            }
            else {
              document.regform.phno.focus();
            }

          }
        }
        ajax.open("GET", "checke.php?email="+email, true);
        ajax.send();

}

function check() {
      var username = document.getElementById('uname1').value;
            if (!username) return;
            console.log("WORKING user TILL HERE");
            var ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200 ){
                console.log(this.response); //helps SEE WHATS GOING ON in the php file;
                if(this.response=='TRUE'){
                    document.getElementById('user').innerHTML="Username taken";
                    document.getElementById('uname1').value="";
                    document.forms["regform"]["uname"].focus();
                }
              }
            }
            ajax.open("GET", "check.php?username="+username, true);
            ajax.send();

}

        function validate3()
        {
        var name=document.getElementById("uname1").value;
        var letters=/^[0-9a-zA-Z]+$/;
        if(!name.match(letters))
        {
        alert("Please enter valid username");
        document.getElementById("uname1").value="";
        }
		else if(name=="")
		{
		alert ("username can't be blank");
		}
        }
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
          	
            <center><h1 class="mb-0 bread">EDIT....!</h1></center>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
		  
            <form method="POST" name="regform" action="reg.php" class="bg-white p-5 contact-form">
			<center><h2 class="title">EDIT...</h2></center><br>
			<div class="modal-body">
<form method="POST" action="addprofile1.php">
<?php
include("dbconnection.php");
$sq="select * from tbl_login where username='$temp'";
$res=mysqli_query($con,$sq);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sql="select * from tbl_reg where login_id='$b'";
$c=mysqli_query($con,$sql);
$result=mysqli_fetch_array($c);
?>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name" name="fname" id ="name1" onblur="validate()" value="<?php echo $result['fname']; ?> required>
              </div><br>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Last name" name="lname" id ="name2" onblur="validate6()"  value="<?php echo $result['lname']; ?>required>
              </div><br>
			  <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" id ="em" onblur="validate1(); che()" value="<?php echo $result['email']; ?> required>
				<span id="maile"></span>
              </div><br>
			  <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone" name="phone" id ="phno" onblur="validate2()" value="<?php echo $result['phone']; ?> required>
              </div><br>
			  <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="uname" id ="uname1" onBlur="validate3(); check()" value="<?php echo $result['uname']; ?>required>
				
              </div>  <span id="user"></span>
            <span id="username-list"></span>
            <p id="loaderIcon" style="display:none;">Loading..</p><br>
			  <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" id ="pass" onblur="validate4()" required>
              </div><br>
			  <div class="form-group">
                <input type="password" class="form-control" type="password" placeholder="Confirm Password" name="password1" id ="cpawd" onblur="validcpass()" required>
              </div><br>
              
              <div class="form-group">
                <input type="submit" value="CLOSE" class="btn btn-primary py-3 px-5"> 
				 <input type="submit" value="UPDATE" class="btn btn-primary py-3 px-5">
              </div>
			  
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');"></div>
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