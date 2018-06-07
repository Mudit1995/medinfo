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
$arr = getAllDisease();
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
        <div class="col-lg-offset-1 col-lg-10">

            <div class="panel panel-primary" style="margin-top: 7%;">
                <div class="panel-heading">
                    <h3 class="panel-title">Database Analysis</h3>
                </div>
                <div class="panel-body">

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>patientID</th>
                                <th>name</th>
                                <th>disease</th>
                                <th>treatment</th>
                                <th>addess</th>
                                <th>doctorID</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = 1;
                            foreach ($arr as $ar) {
                                echo "<tr>";
                                echo "<td>" . $x . "</td>";

                                echo "<td> " . $ar['patientID'] . "</td>";
                                echo "<td> " . $ar['name'] . "</td>";

                                echo "<td>" . $ar['disease'] . "</td>";
                                echo "<td>" . $ar['treatment'] . "</td>";
                                echo "<td> <a href='address.php?ad=" . $ar['address'] . "'>" . $ar['address'] . "</a></td>";
                                echo "<td>" . $ar['doctorID'] . "</td>";

                                echo "</tr>";
                                $x++;
                            }
                            ?>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sno</th>
                                <th>patientID</th>
                                <th>name</th>
                                <th>disease</th>
                                <th>treatment</th>
                                <th>addess</th>
                                <th>doctorID</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-offset-2 col-lg-6" >  
            <?php
            if (!empty($msg)) {
                ?>
                <div class="alert alert-success" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only">Success:</span>
                    Treatment is Submitted.
                </div>
                <?php
            } else {
                
            }
            ?>

            <?php
            if (isset($_SESSION['name'])) {
                if ($_SESSION['name'] == "Admin") {
                    ?>
                    <div class="panel panel-success" style="margin-top: 7%;">
                        <div class="panel-heading">
                            <h3 class="panel-title">Database Analysis</h3>
                        </div>
                        <div class="panel-body">

                            <form method="post" action=""> 
                                <div class="form-group">
                                    <label >Enter Treatment</label>
                                    <textarea class="form-control"  name='message' placeholder="enter treatment "rows="3"></textarea>
                                </div>

                                <input type="submit"  name="s1" class="btn btn-success" value="Submit" />
                            </form>
                        </div>
                    </div>
            
                                      <div> <a href="view_treatments.php" class="btn btn-success btn-lg btn-block">Government Notification </a></div>

                </div>

                <?php
                
            }else{ ?>
             
                
        <div> <a href="view_treatments.php" class="btn btn-success btn-lg btn-block">Government Notification </a></div>
             
        <?php
            }
        }
        ?>
        <div class="col-lg-12" style="margin-top: 20%">
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