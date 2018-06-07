<?php
ob_start();
session_start();
include_once './db/dbConnection.php';
if (isset($_POST['s1'])) {
    $val = gov();
    if ($val) {
        $msg = "request is submitted";
    }
}
if (empty($_SESSION['id'])) {
    header("location: http://localhost/medinfo/index.php?msg=error");
}
$arr = getGov();
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
                        <li><a href="index.php#header">Home</a></li>
                        <li><a href="index.php#services">services</a></li>
                        <li><a href="index.php#client">clients</a></li>
                        <li><a href="index.php#contact">contact</a></li>
                        <?php
                        if (isset($_SESSION['id'])) {
                            echo "<li><a>welcome " . $_SESSION['name'] . "</a></li>";
                            ?>
                            <li><a href="logout.php">Logout</a></li>

                            <?php
                        } else {
                            ?>
                            <li><a href="web">register</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <link rel="stylesheet" type="text/css"
              href="css/dd3.css">

        <script type="text/javascript" charset="utf8"
        src="js/dd1.js"></script>
        <script type="text/javascript" charset="utf8"
        src="js/dd2.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <div class="col-lg-offset-3 col-lg-5" style="margin-top: 7%;">
          
            <button class="btn btn-success btn-lg col-lg-12 "><span class="lead">Treatments</span></button>
         
            
            <div class="well well-lg" style="margin-top: 17%;">
                <h4>These views are provided by government :</h4>
            </div>
            <?php
                                    foreach ($arr as $val) {
                                        echo "<div class='well well-lg'>";
                                       echo  $val['message'] ;     
                                       echo "</div>";
                                    }
                                    
            ?>
        </div>
       


    </body>
</html>