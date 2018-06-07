<?php
ob_start();
session_start();
 include_once '../db/dbConnection.php';
if(isset($_POST['s1'])){
   
    insertPatient();
}
if(isset($_POST['s2'])){
    
    if($_POST['email'] ==  "admin@gmail.com" && $_POST['password'] == "admin#123"){
         $_SESSION['id']= 1;
         $_SESSION['name']= "Admin";
          header("location: http://localhost/medinfo/database.php");
    }else{
    
   $ar = checkUser();
  
    if(!empty($ar)){
        $_SESSION['id']= $ar[0];
        $_SESSION['name']= $ar[1];
       header("location: http://localhost/medinfo/index.php");
    }else {
        echo "<script>alert('wrong user name and password');</script>";
    }
    
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title> Sign in and Sign up Form </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="stylish Sign in and Sign up Form A Flat Responsive widget, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--online_fonts-->
	<link href="//fonts.googleapis.com/css?family=Sansita:400,400i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!--//online_fonts-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all" /><!--stylesheet-->
        
         <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
          <style>
              #abc > li > a{
                  text-transform:  uppercase;
              }
          </style>
</head>
<body>
    
    
<div id="myNavbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        
        <div class="navbar-header">
            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
   
            <img src="images/symbol.png" height="50px"  alt="">
             
            <a href="#" class="navbar-brand">Medinfo</a>
        </div>
        <div class="navbar-collapse collapse" >
            <ul class="nav navbar-nav navbar-right" id="abc">
                <li><a href="../index.php#header">Home</a></li>
                <li><a href="../index.php#services">services</a></li>
                <li><a href="../index.php#client">clients</a></li>
                <li><a href="../index.php#contact">contact</a></li>
                <li><a href="#">register</a></li>
            </ul>
        </div>
    </div>
</div>
   
<!--- End Navigation ---->
<h1> Sign in and Sign up  form</h1>
<div class="form-w3ls">
	<div class="form-head-w3l">
		<h2>s</h2>
	</div>
    <ul class="tab-group cl-effect-4">
        <li class="tab active"><a href="#signin-agile">Sign In</a></li>
		<li class="tab"><a href="#signup-agile">Sign Up</a></li>        
    </ul>
    <div class="tab-content">
        <div id="signin-agile">   
			<form action="#" method="post">
				
				<p class="header">Email</p>
				<input type="text" name="email" placeholder="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				
                                <input type="checkbox" name="doctor" id="brand" value="doctor">
				<label for="brand"><span></span> Are you Doctor?</label>
				
				<input type="submit"  name="s2" class="sign-in" value="Sign In">
			</form>
		</div>
		<div id="signup-agile">   
			<form action="#" method="post">
				
				<p class="header">User Name</p>
				<input type="text" name="name" placeholder="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" required="required">
				
				<p class="header">Email Address</p>
				<input type="email" name="email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				
                                <p class="header">Address</p>
				<input type="text" name="address" placeholder="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="required">
				
                               
                               
				<p> <input type="checkbox" name="doctor" id="docyes" value="doctor">
                                    <label for="brand"><span></span> Are you Doctor ? </label> </p>
                                
                                <div id="docref">
                                    <input type="text" name="docref" placeholder="Doctor Reference Number" />
                              <p class="header">Specialization</p>
				<input type="text" name="specialization" placeholder="specialization" 
                                       >
				
                                </div>
				
                                
                                <input type="submit" name="s1" class="register" value="Sign up">
			</form>
		</div> 
    </div><!-- tab-content -->
</div> <!-- /form -->	  
<p class="copyright">&copy; desined by mudit mohan <a href="#" target="_blank">mudit mohan</a></p>
<!-- js files -->
<script src='js/jquery.min.js'></script>
<script src="js/index.js"></script>
<!-- /js files -->
<script>
$(function(){
    $("#docref").hide();
    $("#docyes").click(function(){
        if (this.checked) {
             $("#docref").show();
        }else{
             $("#docref").hide();
        }
       
    });
    
});
</script>
</body>
</html>


