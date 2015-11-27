<?php
$output = "";
//variables
$vehicle = $pickDate = $pickTime = $dropoffDate = $dropoffTime = $noOfPassengers = $driver = $pickupLoc = $dropoffLoc = "";
//error variables
$vehicleEr = $pickDateEr = $pickTimeEr = $dropoffDateEr = $dropoffTimeEr = $noOfPassengersEr = $driverEr = $pickupLocEr = $dropoffLocEr = "";
				
				
//assign values for variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["vehicle"])) {
	$vehicleEr = "please select a vehicle.";
} else {
	$vehicle = test_input($_POST["vehicle"]);
}
					
if(empty($_POST["pickDate"])){
	$pickDateEr = "please enter a pick-up day.";
}else{
	$pickDate = test_input($_POST["pickDate"]);
}
					
$pickTime = ($_POST['pickuphr']).":".($_POST['pickupmin']).":".($_POST['pickupampm']);
					
if (empty($_POST["dropoffDate"])) {
	$dropoffDateEr = "please enter the drop-off day.";
} else {
	$dropoffDate = test_input($_POST["dropoffDate"]);
}
					
$dropoffTime = ($_POST['dropoffhr']).":".($_POST['dropoffmin']).":".($_POST['dropoffampm']);

if (empty($_POST["noOfPassengers"])) {
	$noOfPassengersEr = "select the number of passengers.";
} else {
	$noOfPassengers = test_input($_POST["noOfPassengers"]);
}
					
if (empty($_POST["driver"])) {
	$driverEr = "select yes or no..";
} else {
	$driver = test_input($_POST["driver"]);
}
					
//pickupLoc & dropoffLoc are optional
$pickupLoc = ($_POST["pickupLoc"]);
$dropoffLoc = ($_POST["dropoffLoc"]);
}	
				
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
				
			//database connection
			if(isset($_POST["submit"])){
				$mydb = new mysqli('localhost','slcabs','slcabs','slcabs');
				if($mydb->connect_error){
					die('Connect Error : '.$mydb->connect_errno.':'.$mydb->connect_error);
				}
				
				if(empty($vehicle) || empty($pickDate) || empty($dropoffDate) || empty($noOfPassengers) || empty($driver)){
					$output = "";
				}else{
					$sql = "INSERT INTO reservation (vehicle, pickDate, pickTime, dropoffDate, dropoffTime, noOfPassengers, driver, pickupLoc, dropoffLoc) VALUES (
						'$vehicle',
						'$pickDate',
						'$pickTime',
						'$dropoffDate',
						'$dropoffTime',
						'$noOfPassengers',
						'$driver',
						'$pickupLoc',
						'$dropoffLoc')";
						
					$insert = $mydb->query($sql);
				
					if($insert){
						$vehicle = $pickDate = $pickTime = $dropoffDate = $dropoffTime = $noOfPassengers = $driver = $pickupLoc = $dropoffLoc = "";
						session_start();
						$_SESSION["new"] = "";
						header("Location: customerDetails.php");
						
					}else{
						die("Error: {$mydb->errno} : {$mydb->error}");
					}
				}
				$mydb->close();
			}

			?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>
  <title>SLCabs | Home</title>
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="iThemesLab">

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

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color CSS Styles-->
  <link rel="stylesheet" type="text/css" href="css/colors/pink.css" title="pink" media="screen" />


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
      <div class="top-bar dark-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> No 294, Galle Rd, Nupe, Matara.</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> slankacabs@gmail.com</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +71 7 98 98 98</a>
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
                <a class="active" href="index.html">Home</a>
              </li>
			  <li>
                <a href="login.html">Logout</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
			  <li>
                <a class="active" href="index.html">Home</a>
              </li>
			  <li>
                <a href="login.html">Logout</a>
              </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->

    <!-- Start Page Banner -->
    <div class="page-banner no-subtitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Reservation</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>Reservation</li>
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

          <!-- Start Call Action -->
          <div class="call-action call-action-boxed call-action-style1 clearfix">
            <!-- Call Action Button -->
            <h2 class="primary"><strong>SLCabs Reservation</strong></h2>
            <p>Enter The Details Here.</p>

			<div style = "margin-left:350px;">
			<div class="style1"><?php echo $output;?></div>

			<form id="reservation" action="" method="post"> 
						
			<h3 class = "primary">Select a vehicle  <em style="color:red">*</em></h3>
			<select id="car" name="vehicle" onChange="gotourl();" >
			<option value="" selected="selected">--</option>
			<option value="2365"<?php if($vehicle=="2365"){?> selected <?php } ?>>Toyota Fortuner 4X4</option>
			<option value="1842"<?php if($vehicle=="1842"){?> selected <?php } ?>>Mitsubishi Montero Sport 4X4</option>
			<option value="1862"<?php if($vehicle=="1862"){?> selected <?php } ?>>SsangYong Rexton 4X4</option>
			<option value="1866"<?php if($vehicle=="1866"){?> selected <?php } ?>>Toyota Rav-4</option>
			<option value="1845"<?php if($vehicle=="1845"){?> selected <?php } ?>>Land Rover Defender 4X4</option>
			<option value="2325"<?php if($vehicle=="2325"){?> selected <?php } ?>>Mitsubishi Outlander 4X4</option>
			<option value="2227"<?php if($vehicle=="2227"){?> selected <?php } ?>>Mitsubishi Montero GDI 4X4</option>
			<option value="1839"<?php if($vehicle=="1839"){?> selected <?php } ?>>Toyota Vigo Hi Lux 4X4</option>
			</select><span style="color:red"> <?php echo $vehicleEr;?></span><br><br>
								
			<h3 class="primary">Select the book reservation period & Location</h3>

			<div>
			<label for="from">Pick up day <em style="color:red">*</em> (yyyy-mm-dd)</label><br>
			<input type="date" style="height:22px;" name="pickDate" value="<?php echo $pickDate;?>"><span style="color:red"> <?php echo $pickDateEr;?></span>
			at 
			<select style="width:55px;" name="pickuphr" >
			<option value="">--</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			</select>
									
			: <select style="width:55px;" name="pickupmin" >
			<option value="">--</option>
			<option value="00">00</option>
			<option value="15">15</option>
			<option value="30">30</option>
			<option value="45">45</option>
			</select>

			: <select name="pickupampm" >
			<option value="">--</option>
			<option value="AM">AM</option>
			<option value="PM">PM</option>
			</select>
			</div><br>

			<div>
			<label for="from">Drop off day <em style="color:red">*</em> (yyyy-mm-dd)</label><br>
			<input type="date" style="height:22px;" name="dropoffDate" value="<?php echo $dropoffDate;?>"><span style="color:red"><?php echo $dropoffDateEr;?></span>
			at 
			<select style="width:55px;" name="dropoffhr" >
			<option value="">--</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			</select>
									
			: <select style="width:55px;" name="dropoffmin" >
			<option value="">--</option>
			<option value="00">00</option>
			<option value="15">15</option>
			<option value="30">30</option>
			<option value="45">45</option>
			</select>

			: <select name="dropoffampm" >
			<option value="">--</option>
			<option value="AM">AM</option>
			<option value="PM">PM</option>
			</select>
			</div><br>

			<div>
			<label for="from">NO of Passengers <em style="color:red">*</em></label><br>
			<select name="noOfPassengers" >
			<option value="" selected="selected">--</option>
			<option value="1"<?php if($noOfPassengers=="1"){?> selected <?php } ?>>1</option>
			<option value="2"<?php if($noOfPassengers=="2"){?> selected <?php } ?>>2</option>
			<option value="3"<?php if($noOfPassengers=="3"){?> selected <?php } ?>>3</option>
			<option value="4"<?php if($noOfPassengers=="4"){?> selected <?php } ?>>4</option>
			<option value="5"<?php if($noOfPassengers=="5"){?> selected <?php } ?>>5</option>
			<option value="6"<?php if($noOfPassengers=="6"){?> selected <?php } ?>>6</option>
			<option value="7"<?php if($noOfPassengers=="7"){?> selected <?php } ?>>7</option>
			<option value="8"<?php if($noOfPassengers=="8"){?> selected <?php } ?>>8</option>
			<option value="9"<?php if($noOfPassengers=="9"){?> selected <?php } ?>>9</option>
			<option value="10"<?php if($noOfPassengers=="10"){?> selected <?php } ?>>10</option>
			</select><span style="color:red"> <?php echo $noOfPassengersEr;?></span>
			</div><br>

			<div>
			<label for="from">Need a Driver <em style="color:red">*</em></label><br>
			<select name="driver" >
			<option value="" selected="selected">--</option>
			<option value="Yes"<?php if($driver=="Yes"){?> selected <?php } ?>>Yes</option>
			<option value="No"<?php if($driver=="No"){?> selected <?php } ?>>No</option>
			</select><span style="color:red"> <?php echo $driverEr;?></span>
			</div><br>

			<div>
			<label>Pick-up Location</label>
			<select name="pickupLoc" >
			<option value="pick_add">SLCabs Office</option>
			<option value="pick_flight">Colombo Airport</option>
			<option value="pick_other">Other</option>
			</select>
			</div><br>

			<div>
			<label>Drop-off Location</label>
			<select name="dropoffLoc" >
			<option value="drop_add">SLCabs Office</option>
			<option value="drop_flight">Colombo Airport</option>
			<option value="drop_other">Other</option>
			</select>
			</div><br>
			
			<input class="btn-system btn-large" style="margin-top:8px;" type="submit" name="submit" value="Reserve">

			</form>
			</div>
          </div>
          <!-- End Call Action -->

        </div>
      </div>
    </div>
    <!-- End Content -->


    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Get in touch<span class="head-line"></span></h4>
              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form class="subscribe">
                <input type="text" placeholder="mail@example.com">
                <input type="submit" class="btn-system" value="Send">
              </form>
            </div>
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
                <li>
                  <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          <div class="col-md-3">
            <div class="footer-widget twitter-widget">
              <h4>Twitter Feed<span class="head-line"></span></h4>
              <ul>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                  <span>26 February 2014</span>
                </li>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
          <div class="col-md-3">
            <div class="footer-widget flickr-widget">
              <h4>Flicker Feed<span class="head-line"></span></h4>
              <ul class="flickr-list">
                <li>
                  <a href="images/flickr-01.jpg" class="lightbox">
                    <img alt="" src="images/flickr-01.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-02.jpg" class="lightbox">
                    <img alt="" src="images/flickr-02.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-03.jpg" class="lightbox">
                    <img alt="" src="images/flickr-03.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-04.jpg" class="lightbox">
                    <img alt="" src="images/flickr-04.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-05.jpg" class="lightbox">
                    <img alt="" src="images/flickr-05.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-06.jpg" class="lightbox">
                    <img alt="" src="images/flickr-06.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-07.jpg" class="lightbox">
                    <img alt="" src="images/flickr-07.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-08.jpg" class="lightbox">
                    <img alt="" src="images/flickr-08.jpg">
                  </a>
                </li>
                <li>
                  <a href="images/flickr-09.jpg" class="lightbox">
                    <img alt="" src="images/flickr-09.jpg">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-3">
            <div class="footer-widget contact-widget">
              <h4><img src="images/footer-margo.png" class="img-responsive" alt="Footer Logo" /></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
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
              <p>&copy; 2014 Margo - All Rights Reserved</p>
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