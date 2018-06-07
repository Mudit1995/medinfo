<?php
ob_start();
session_start();
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
        <div id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                      

                            <!DOCTYPE html>
                            <html lang="en">
                                <head>

                                    <meta charset="utf-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <meta name="viewport" content="width=device-width, initial-scale=1">

                                    <title>Google Maps </title>
                                </head>
                                <body>

                                    <?php

// function to geocode address, it will return false if unable to geocode address
                                    function geocode($address) {


                                        $arrContextOptions = array(
                                            "ssl" => array(
                                                "verify_peer" => false,
                                                "verify_peer_name" => false,
                                            ),
                                        );
                                       
                                        // url encode the address
                                        $address = urlencode($address);

                                        // google map geocode api url
                                        $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyDt_WwmJc_rFTrjy57CAjF3ntsHtjuzzeY";

                                        // get the json response
                                        $resp_json = file_get_contents($url, false, stream_context_create($arrContextOptions));

                                        // decode the json
                                        $resp = json_decode($resp_json, true);

                                        // response status will be 'OK', if able to geocode given address 
                                        if ($resp['status'] == 'OK') {

                                            // get the important data
                                            $lati = isset($resp['results'][0]['geometry']['location']['lat']) ? $resp['results'][0]['geometry']['location']['lat'] : "";
                                            $longi = isset($resp['results'][0]['geometry']['location']['lng']) ? $resp['results'][0]['geometry']['location']['lng'] : "";
                                            $formatted_address = isset($resp['results'][0]['formatted_address']) ? $resp['results'][0]['formatted_address'] : "";

                                            // verify if data is complete
                                            if ($lati && $longi && $formatted_address) {

                                                // put the data in the array
                                                $data_arr = array();

                                                array_push(
                                                        $data_arr, $lati, $longi, $formatted_address
                                                );

                                                return $data_arr;
                                            } else {
                                                return false;
                                            }
                                        } else {
                                            echo "<strong>ERROR: {$resp['status']}</strong>";
                                            return false;
                                        }
                                    }

                                    if (isset($_POST['address'])) {

                                        // get latitude, longitude and formatted address
                                        $data_arr = geocode($_POST['address']);
                                        // if able to geocode the address
                                        if ($data_arr) {

                                            $latitude = $data_arr[0];
                                            $longitude = $data_arr[1];
                                            $formatted_address = $data_arr[2];
                                            ?>

                                            <!-- google map will be shown here -->
                                            <div id="gmap_canvas"  style="height: 500px;width: 100% ; color: black ;"></div>
                                            <div id='map-label'>Map shows approximate location.</div>

                                            <!-- JavaScript to show google map -->
                                            <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyBndN5n_325o_ZOW3rhtUl2f0L4oh2rP9g"></script>   
                                            <script type="text/javascript">
                                                function init_map() {
                                                    console.log('inti')
                                                    var myOptions = {
                                                        zoom: 14,
                                                        center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
                                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                                    };
                                                    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                                                    marker = new google.maps.Marker({
                                                        map: map,
                                                        position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
                                                    });
                                                    infowindow = new google.maps.InfoWindow({
                                                        content: "<?php echo $formatted_address; ?>"
                                                    });
                                                    google.maps.event.addListener(marker, "click", function () {
                                                        infowindow.open(map, marker);
                                                    });
                                                    infowindow.open(map, marker);
                                                }
                                                google.maps.event.addDomListener(window, 'load', init_map);
                                            </script>

                                            <?php
                                            // if unable to geocode the address
                                        } else {
                                            echo "No map found.";
                                        }
                                    }
                                    ?>

                                 


                    </div>
                    <div class="col-lg-6 col-md-6 wow bounceInRight">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">See Location on Google Map</h3>
                            </div>
                            <div class="panel-body">
                                <form action="" method="post" class="form-group">
                                    <input type='text' class="form-control" name='address' placeholder='Enter any address here'
                                           value="<?php echo isset($_GET['ad']) ? $_GET['ad'] : ''; ?>"
                                           />
                                    <input type='submit' class="btn btn-success" value='Geocode!' />
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>


