<?php
ob_start();
session_start();
if(isset($_POST['s1'])){
  
    include_once 'db/dbConnection.php';
    $val = insertContact();
    if($val){
        $msg = "request is submitted";
    }



}
  if(isset($_GET['msg'])){
if($_GET['msg'] == 'error'){
    
    echo "<script>alert('Please Login ');</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medinfo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--talk.to-->


  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ae5f2315f7cdf4f0533b6f4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <body>
   
<!--NAVIGATION-->

<div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
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
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#header">Home</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#client">clients</a></li>
                <li><a href="#contact">contact</a></li>
                <?php
                if(isset($_SESSION['id'])){
                    echo  "<li><a>welcome ". $_SESSION['name'] ."</a></li>";
                    
                ?>
                <li><a href="logout.php">Logout</a></li>
                          <?php
                }else {
                
                ?>
                <li><a href="web">register</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
   
<!--- End Navigation ---->
  
<!--- Header ---->
 
 <div id="header" class="header">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-6 wow bounceInLeft" style="color:lightseagreen;">
                 <h1>we care for you </h1>
                 <p>The application and a website  provides a User Interface which allows the patients to  interact with other patients and doctors so as to get the proper treatment . This will also help in gathering the data from all medical stores , diagnostic centre etc.  and create a database so that government can also analyse the disease in a particular area and provide them with proper cure and medications and warnings and  treatments .
</p>
<!--                 <button class="btn btn-lg btn-primary">Register</button>
                 <button class="btn btn-lg btn-success">View Detail</button>-->
             </div>
             <div class="col-lg-6 col-md-6 wow bounceInRight">
                 <img src="images/Responsive-Web-Design.png" alt="">
             </div>
         </div>
     </div>
 </div>
  
<!---- End Header ---->
 
 <!--- Services ---->
 
 <div id="services" class="services">
     <div class="container">
         <h2 class="wow fadeInUp">Services</h2>
         <p class="wow fadeInUp" data-wow-delay="0.4">Medical services provided by us </p>
         <div class="row">
             <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
               <a href="address.php">    <i class="fa fa-user-md" aria-hidden="true"></i>
                 <h4>see others on map </h4>
                 <p>consult with other patients in your area </p>
               </a>
             </div>
             <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.4s">
                 <a href="medicine.php">  <i class="fa fa-medkit" aria-hidden="true"></i>
                 <h4>Medicine </h4>
                 <p>Get the generic medicine at your doorstep</p>
                 </a>
             </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
              <a href="database.php">    <i class="fa fa-database" aria-hidden="true"></i>
                 <h4>Database</h4>
                 <p>Discuss with other patents in your locality</p></a>
             </div>
             <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                 <i class="fa fa-ambulance" aria-hidden="true"></i>
                 <h4>Ambulance </h4>
                 <p>Get the ambulance as soon as possible from your nearest hospital </p>
             </div>
         </div>
     </div>
 </div>
<!--- Clients -->

<div id="client" class="clients">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp">Trusted by</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4">we are been trusted by many well renowed hospitals </p>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="2s">
                <li><img src="images/saraal.jpg" alt=""></li>
            </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.6s">
                <li><a href="http://www.delhimedicalcouncil.org"><img src="images/delhimedicalcounsil.jpg" alt=""></a></li>
            </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.2s">
                <li><a href="https://www.maxhealthcare.in/hospital-network/max-super-speciality-hospital-shalimar-bagh"><img src="images/maxhospital.png" alt=""></a></li>
            </div>
            <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
                <li><a href="http://www.blkhospital.com"> <img src="images/blk.jpg" alt=""></a></li>
            </div>
        </div>
    </div>
</div>
 
<!---- End Clients ----->

<!--- Contact ------>

<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp">Contact</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4">medical care for you </p>
            
            <div class="col-lg-12 col-md-12">
                <?php
                if(!empty($msg)){
                ?>
              <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Success:</span>
  Request is Submitted and Thanks for contacting us.
</div>
              <?php  }else{
                  
                  
              }
              ?>
                
            </div>
            <form method="post">
                
            <div class="col-lg-6 col-md-6">
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="name" aria-describedby="sizing-addon1" placeholder="Full Name">
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="email" aria-describedby="sizing-addon1" placeholder="Email Address">
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="phone" aria-describedby="sizing-addon1" placeholder="Phone Number">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="input-group wow fadeInUp" data-wow-delay="2s">
                    <textarea name="message" id="" cols="80" rows="6" class="form-control" placeholder="Message"></textarea>
                </div>
                <button class="btn btn-lg wow fadeInUp" type="submit" name="s1" data-wow-delay="2.4s">Submit Your Message</button>
            </div>
                </form>
        </div>
    </div>
</div>
 
 <!---- End Contact ----->
 
 
 <!---- Footer ---->
 
 <div id="footer" class="footer">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-4">
                 <h4 class="wow fadeInUp">Contact Us</h4>
                 <p><i class="fa fa-home" aria-hidden="true"></i> 143 deepali pitampura new delhi 110034</p>
                 <p><i class="fa fa-envelope" aria-hidden="true"></i> mudit.m.aggarwal@gmail.com</p>
                 <p><i class="fa fa-phone" aria-hidden="true"></i> +8527447450</p>
                 <p><i class="fa fa-globe" aria-hidden="true"></i> www.medinfo.com</p>
             </div>
             <div class="col-lg-4 col-md-4">
                 <h4>About</h4>
                 <p><i class="fa fa-square-o" aria-hidden="true"></i> About Us</p>
                 <p><i class="fa fa-square-o" aria-hidden="true"></i> Privacy</p>
                 <p><i class="fa fa-square-o" aria-hidden="true"></i> Term & Condition</p>
             </div>
             <div class="col-lg-4 col-md-4">
                 <h4>Stay in touch</h4>
                 <a href="https://www.facebook.com/mudit.aggarwal.54"><i class="social fa fa-facebook" aria-hidden="true"></i></a>
                 <i class="social fa fa-twitter" aria-hidden="true"></i>
                <i class="social fa fa-linkedin" aria-hidden="true"></i>
                <i class="social fa fa-pinterest" aria-hidden="true"></i>
                <i class="social fa fa-youtube" aria-hidden="true"></i>
                <i class="social fa fa-github" aria-hidden="true"></i><br>
                <input type="email" placeholder="Subscribe For Updates"><button class="btn btn-success">Subscribe</button>
             </div>
         </div>
     </div>
 </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>