<?php

include "dbops.php";

if(isset($_POST["submit"])){
            $vehicle = $_POST["vehicle"];
            $pickDate = $_POST["pickDate"];
            $pickTime = ($_POST['pickuphr']).":".($_POST['pickupmin'])." ".($_POST['pickupampm']);
            $dropoffDate = $_POST["dropoffDate"];
            $dropoffTime  = ($_POST['dropoffhr']).":".($_POST['dropoffmin'])." ".($_POST['dropoffampm']);
            $noOfPassengers = $_POST["noOfPassengers"];
            $driver = $_POST["driver"];
            $pickupLoc = $_POST["pickupLoc"];
            $dropoffLoc = $_POST["dropoffLoc"];

            $totalcost1=floor((strtotime($dropoffDate)-strtotime($pickDate))/(3600*24));

            if( $conn -> connect_error ){
                die('Connect Error: ' .$conn -> connect_errno . ' : ' . $conn -> connect_error);
            }
            
            $sql1 = "SELECT vehicleName,foraday,mileageLimitaion,excessMileage FROM vehicledetails";
            
            $result = $conn -> query($sql1);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $vehicleName = $row["vehicleName"];
                  $rateforaday = $row["foraday"];
                  $millage = $row["mileageLimitaion"];
                  $excessmil = $row["excessMileage"];
                  }
            } else {
                  echo "0 results";
            }

            $totalcost=$totalcost1*$rateforaday;
   
            $conn -> close();
/*else{
            $vehicle = "Select a vehcile first ";
            $pickDate = "Select a vehcile first ";
            $pickTime = "Select a vehcile first ";
            $dropoffDate = "Select a vehcile first ";
            $dropoffTime = "Select a vehcile first ";
            $noOfPassengers = "Select a vehcile first ";
            $driver = "Select a vehcile first ";
            $pickupLoc ="Select a vehcile first ";
            $dropoffLoc = "Select a vehcile first ";
}*/
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Make your Reservation</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive etatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="SLCabs Online reservations">
  <meta name="author" content="GroupWork">


  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="red" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/jade.css" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/cyan.css" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/orange.css" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/peach.css" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/pink.css" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/purple.css" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/sky-blue.css" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen" />


  <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, Galle Road, Galle</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> info@slcabs.com</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <div class="col-md-6">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->

      <!-- Start Header ( Logo & Naviagtion ) -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.html"><img alt="" src="images/logo.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li><a href="tours.html">Tours</a></li>
              <li>
                <a href="about.html">About</a>
              </li>
              <li><a href="contact.html">Contact</a></li>

            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
          </li>
              <li><a href="tours.html">Tours</a></li>
              <li>
            <a href="about.html">About</a>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Reservations</h2>
            <p>For an Awesome Ride</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a></li>
              <li>Reservations</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">


          <div class="row">

            <div class="col-md-7">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Pickup or rent a vehicle</span></h4>

              <!-- Some Text -->
              <p>Now you can rent or pickup any vehicle you like for your awesome valuable ride with SLCabs <a title="Simple Tooltip" href="#" class="itl-tooltip" data-placement="top">printing</a>Reserve your vehicle online by filling the below form with your correct details and comment if you have any more requirements from our side.Feel free to ask any quries or questions if you have by contacting us.</p>
              <p>We provide a mind blowing customer service while the pickup and quality vehicles for your jurney.</p>

            </div>

            <div class="col-md-5">

              <!-- Start Touch Slider -->
              <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                <div class="item"><img alt="" src="images/Vehicles/Rav4.jpg"></div>
                <div class="item"><img alt="" src="images/Vehicles/Prado.jpg"></div>
                <div class="item"><img alt="" src="images/Vehicles/LandRover.jpg"></div>
              </div>
              <!-- End Touch Slider -->

            </div>

          </div>

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <div class="row">

            <div class="col-md-6" >

              <!-- Classic Heading -->
              
              <h4 class="classic-title"><span>Please fill the form with your details</span></h4>

              <form class="navbar-form navbar-left" id="req_form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                <input type="hidden" name="vehicleName" value="<?php echo $vehicleName ?>"/>
                <input type="hidden" name="pickDate" value="<?php echo $pickDate ?>"/>
                <input type="hidden" name="pickTime" value="<?php echo $pickTime ?>"/>
                <input type="hidden" name="dropoffDate" value="<?php echo $dropoffDate ?>"/>
                <input type="hidden" name="dropoffTime" value="<?php echo $dropoffTime ?>"/>
                <input type="hidden" name="noOfPassengers" value="<?php echo $noOfPassengers ?>"/>
                <input type="hidden" name="driver" value="<?php echo $driver ?>"/>
                <input type="hidden" name="pickupLoc" value="<?php echo $pickupLoc ?>"/>
                <input type="hidden" name="dropoffLoc" value="<?php echo $dropoffLoc ?>"/>

                  <div class="form-group">
                      <label>Full Name :  </label><br><input type="text" id="name" name="name" class="form-control" placeholder="Ex :- Akila wasala"><br><br>
                  </div>
                  

                  <div class="form-group">
                      <label>Enter the email address :  </label><br><input type="email" id="textF" name="email" class="form-control" placeholder="*************@gmail.com"><br><br>
                  </div>

                  <div class="form-group">
                      <label>Country :  </label><br><input type="text" id="textF" name="country" class="form-control" placeholder="Sri Lanka"><br/><br>
                  </div>
                  
                  
                  <div class="form-group">
                    <label>ID card No or Passport No :  </label><br><input type="text" id="textF" name="passportNo" class="form-control" placeholder="**********V"><br><br>       
                  </div>

                  <div class="form-group">
                    <label>Contact No :  </label><br><input type="text" id="textF" name="contactNo" class="form-control" placeholder="+947********"><br><br>       
                  </div>

                   <div class="form-group">
                    <label>Fax :  </label><br><input type="text" id="textF" name="fax" class="form-control" placeholder="0************"><br><br>       
                  </div>
            
                  <div class="form-group">
                    <label>Comments :  </label><br><input type="text" id="textF" name="comments" size="30" class="form-control" placeholder="Special requirements"> <br><br>       
                  </div>

                  <div>
                  <button type="submit" class="slider btn btn-system btn-small" name="submit1">Send Request</button>
                  </div>
                  <br>

                </form>

            </div>

            <div class="col-md-6">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Reservation Details</span></h4>

              <!-- Accordion -->
              <div class="panel-group" id="accordion">

                <!-- Start Accordion 1 -->
                <div class="panel panel-default">
                  <!-- Toggle Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                        <i class="fa fa-angle-up control-icon"></i>
                        <i class="fa fa-desktop"></i> Selected Vehicle Details
                      </a>
                    </h4>
                  </div>
                  <!-- Toggle Content -->
                  <div id="collapse-1" class="panel-collapse collapse in">
                    <div class="panel-body"><img class="img-thumbnail image-text" style="float:left; width:150px;" alt="" src="images/Vehicles/<?php echo $vehicle; ?>.jpg" /> 
                            <form class="navbar-form navbar-left" id="req_form" action="" method="post">

                        <div class="form-group">
                            <label>Vehicle Name : </label> <?php echo $vehicleName ?>
                            
                        </div>
                        <br><br>

                        <div class="form-group">
                            <label>Pick up date : </label> <?php echo $pickDate; ?>
                        </div>
                        <br><br>

                        <div class="form-group">
                            <label>Pick up time : </label> <?php echo $pickTime; ?>
                        </div>
                        <br><br>
                        
                        <div class="form-group">
                          <label>Drop off date : </label> <?php echo $dropoffDate; ?>     
                        </div>
                        <br>

                         <div class="form-group">
                          <br><label>Drop off time : </label> <?php echo $dropoffTime; ?>     
                        </div>
                        <br>

                        <div class="form-group">
                          <br><label>No of passengers : </label> <?php echo $noOfPassengers; ?>    
                        </div>
                        <br>

                        <div class="form-group">
                          <br><label>Pick up location : </label> <?php echo $pickupLoc; ?>     
                        </div>
                        <br>

                        <div class="form-group">
                          <br><label>Drop off location : </label> <?php echo $dropoffLoc; ?>   
                        </div>
                        <br>

                        <div class="form-group">
                          <br><label>Driver : </label> <?php echo $driver; ?> 
                        </div>
                        <br>

                      </form>
                  </div>
                </div>
                <!-- End Accordion 1 -->

                <!-- Start Accordion 2 -->
                <div class="panel panel-default">
                  <!-- Toggle Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
                        <i class="fa fa-angle-up control-icon"></i>
                        <i class="fa fa-gift"></i> Charges
                      </a>
                    </h4>
                  </div>
                  <!-- Toggle Content -->
                  <div id="collapse-2" class="panel-collapse collapse">
                    <div class="panel-body">The Expences for the whole jurney is : <?php echo $totalcost ?> LKR <br>Mileage Limitation : <?php echo $millage ?> Kms/day<br>Excess Mileage : <?php echo $excessmil ?> LKR per KM</div>
                  </div>
                </div>
                <!-- End Accordion 2 -->

              </div>
            </div>

          </div>

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <!-- Classic Heading -->
          <h4 class="classic-title"><span>Our Services</span></h4>

          <!-- Start Team Members -->
          <div class="row">

            <!-- Start Memebr 1 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <!-- Memebr Photo, Name & Position -->
                <div class="member-photo">
                  <img alt="" src="images/team/fc1.jpg" />
                  <div class="member-name">Everything is <span>Negotiatable</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Just call us and we'll negotiate the rates,services as you want!</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- End Memebr 1 -->

            <!-- Start Memebr 2 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <!-- Memebr Photo, Name & Position -->
                <div class="member-photo">
                  <img alt="" src="images/team/fc2.jpg" />
                  <div class="member-name">Airport <span>Pickup</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Just reserve your vehicle so we'll pick you by the airport ontime</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- End Memebr 2 -->

            <!-- Start Memebr 3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <!-- Memebr Photo, Name & Position -->
                <div class="member-photo">
                  <img alt="" src="images/team/fc3.jpg" />
                  <div class="member-name">The Best <span>Services</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>We'll provide the best service for your valuable money</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- End Memebr 3 -->

            <!-- Start Memebr 4 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team-member">
                <!-- Memebr Photo, Name & Position -->
                <div class="member-photo">
                  <img alt="" src="images/team/fc4.jpg" />
                  <div class="member-name">FAQ <span>???????</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Just contact us :)</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- End Memebr 4 -->

          </div>
          <!-- End Team Members -->

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          
    </div>
    <!-- End content -->


    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3">
            
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          <div class="col-md-3">
            
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
          <div class="col-md-3">
            
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-3">
            <div class="footer-widget contact-widget">
              <h4><img src="images/logo.png" class="img-responsive" alt="Footer Logo" /></h4>
              <p>Rent,reserve a vehicle online and take the booked vehicle <br>where ever they want in sri lanka</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2015 SLCabs - All Rights Reserved</p>
            </div>
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
<?php
}      

//Customer details to database


  if (isset($_POST['submit1'])) {

    //$mysqli = new mysqli('localhost','root','','SLCabs');
    
    if( $conn -> connect_error ){
        die('Connect Error: ' .$conn -> connect_errno . ' : ' . $conn -> connect_error);
    }

    $xvehicleName = $_POST['vehicleName'];
    $xpickDate = $_POST['pickDate'];
    $xpickTime = $_POST['pickTime'];
    $xdropoffDate =$_POST['dropoffDate'];
    $xdropoffTime = $_POST['dropoffTime'];
    $xnoOfPassengers = $_POST['noOfPassengers'];
    $xdriver = $_POST['driver'];
    $xpickupLoc = $_POST['pickupLoc'];
    $xdropoffLoc = $_POST['dropoffLoc'];

    
    $sql = "INSERT INTO CustomerDetails ( fullname , email , country , passportNo , contactNo , fax , comments ) VALUES ('{$conn->real_escape_string($_POST['name'])}','{$conn->real_escape_string($_POST['email'])}','{$conn->real_escape_string($_POST['country'])}' ,'{$conn->real_escape_string($_POST['passportNo'])}' ,'{$conn->real_escape_string($_POST['contactNo'])}' ,'{$conn->real_escape_string($_POST['fax'])}','{$conn->real_escape_string($_POST['comments'])}')";
    $sql2 = "INSERT INTO reservation ( vehicleID , pickUpDate , pickUpTime , dropOffDate , dropoffTime , noOfPassengers , needADriver , pickupLocation , dropOffLocation ) VALUES ('$xvehicleName','$xpickDate','$xpickTime','$xdropoffDate','$xdropoffTime','$xnoOfPassengers','$xdriver','$xpickupLoc','$xdropoffLoc')";
       
    $insert = $conn -> query($sql);
    $insert2 = $conn -> query($sql2);  
    
    if($insert2 && $insert){
      echo "Inserted successfully!!!";
    }else{
      echo "Error occurred";
    }

    $conn -> close();
  }


?>


