<?php
include_once './db/dbConnection.php';
$arr = getMedicine();
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
                      <li><a href="#contact">contact</a></li>
                <?php
                if(isset($_SESSION['id'])){
                    echo  "<li><a>welcome ". $_SESSION['name'] ."</a></li>";
                    
                ?>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="profile.php">Profile</a></li>
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

        <link rel="stylesheet" type="text/css"
              href="css/dd3.css">

        <script type="text/javascript" charset="utf8"
        src="js/dd1.js"></script>
        <script type="text/javascript" charset="utf8"
        src="js/dd2.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <div class="col-lg-offset-1 col-lg-10">

            <div class="panel panel-primary" style="margin-top: 7%;">
                <div class="panel-heading">
                    <h3 class="panel-title">Database Analysis</h3>
                </div>
                <div class="panel-body">

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>name</th>
                                <th>address</th>
                              
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = 1 ;
                            foreach ($arr as $ar) {
                                echo "<tr>";
                                    echo "<td>" . $x ."</td>";
                              
                                    
                                    echo "<td> " . $ar['name'] ."</td>";
                                       echo "<td> <a href='address.php?ad=" . $ar['address'] ."'>". $ar['address'] ."</a></td>";
                               
                                echo "</tr>";
                                $x++;
                            }
                            
                            ?>

                         
                        </tbody>
                        <tfoot>
                            <tr>
                                   <th>S.no</th>
                                <th>name</th>
                                <th>address</th>
                              
                                
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#example').DataTable({
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
                });
            });

        </script>
        
        
   
  </body>
</html>