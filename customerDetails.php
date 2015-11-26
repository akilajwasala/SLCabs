<?php
//Customer details to database

if( $_SERVER["REQUEST_METHOD"] == "POST"){
  if (isset($_POST['submit1'])) {

    $mysqli = new mysqli('localhost','root','','SLCabs');
    
    if( $mysqli -> connect_error ){
        die('Connect Error: ' .$mysqli -> connect_errno . ' : ' . $mysqli -> connect_error);
    }
    
    $sql = "INSERT INTO CustomerDetails ( fullname , email , country , passportNo , contactNo , fax , comments ) VALUES ('{$mysqli->real_escape_string($_POST['name'])}','{$mysqli->real_escape_string($_POST['email'])}','{$mysqli->real_escape_string($_POST['country'])}' ,'{$mysqli->real_escape_string($_POST['passportNo'])}' ,'{$mysqli->real_escape_string($_POST['contactNo'])}' ,'{$mysqli->real_escape_string($_POST['fax'])}','{$mysqli->real_escape_string($_POST['comments'])}')";
    
    $insert = $mysqli -> query($sql);
    
    if($insert){
        echo "Success! The row ID : {$mysqli -> insert_id}";
    }
    else{
        die("Error : {$mysqli -> errno} : {$mysqli -> error}"); 
    }
    
    //////// Output the reservation details    
    
    $mysqli -> close();
  }
}


if(isset($_POST["submit"])){
            $vehicle = $_POST["vehicle"];
            $pickDate = $_POST["pickDate"];
            $pickTime = ($_POST['pickuphr']).":".($_POST['pickupmin']).":".($_POST['pickupampm']);
            $dropoffDate = $_POST["dropoffDate"];
            $dropoffTime = $dropoffTime = ($_POST['dropoffhr']).":".($_POST['dropoffmin']).":".($_POST['dropoffampm']);
            $noOfPassengers = $_POST["noOfPassengers"];
            $driver = $_POST["driver"];
            $pickupLoc = $_POST["pickupLoc"];
            $dropoffLoc = $_POST["dropoffLoc"];
}

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
                <li>
                  <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
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
                <ul class="dropdown">
                  <li><a href="index.html">Home Main Version</a></li>
                  <li><a href="index-01.html">Home Version 1</a></li>
                  <li><a href="index-02.html">Home Version 2</a></li>
                  <li><a href="index-03.html">Home Version 3</a></li>
                  <li><a href="index-04.html">Home Version 4</a></li>
                  <li><a href="index-05.html">Home Version 5</a></li>
                  <li><a href="index-06.html">Home Version 6</a></li>
                  <li><a href="index-07.html">Home Version 7</a></li>
                </ul>
              </li>
              <li>
                <a class="active" href="about.html">Pages</a>
                <ul class="dropdown">
                  <li><a class="active" href="about.html">About</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="right-sidebar.html">Right Sidebar</a></li>
                  <li><a href="left-sidebar.html">Left Sidebar</a></li>
                  <li><a href="404.html">404 Page</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Shortcodes</a>
                <ul class="dropdown">
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="action-box.html">Action Box</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="latest-posts.html">Latest Posts</a></li>
                  <li><a href="latest-projects.html">Latest Projects</a></li>
                  <li><a href="pricing.html">Pricing Tables</a></li>
                  <li><a href="accordion-toggles.html">Accordion & Toggles</a></li>
                </ul>
              </li>
              <li>
                <a href="portfolio-3.html">Portfolio</a>
                <ul class="dropdown">
                  <li><a href="portfolio-2.html">2 Columns</a></li>
                  <li><a href="portfolio-3.html">3 Columns</a></li>
                  <li><a href="portfolio-4.html">4 Columns</a></li>
                  <li><a href="single-project.html">Single Project</a></li>
                </ul>
              </li>
              <li>
                <a href="blog.html">Blog</a>
                <ul class="dropdown">
                  <li><a href="blog.html">Blog - right Sidebar</a></li>
                  <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                  <li><a href="single-post.html">Blog Single Post</a></li>
                </ul>
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
            <ul class="dropdown">
              <li><a href="index.html">Home Main Version</a>
              </li>
              <li><a href="index-01.html">Home Version 1</a>
              </li>
              <li><a href="index-02.html">Home Version 2</a>
              </li>
              <li><a href="index-03.html">Home Version 3</a>
              </li>
              <li><a href="index-04.html">Home Version 4</a>
              </li>
              <li><a href="index-05.html">Home Version 5</a>
              </li>
              <li><a href="index-06.html">Home Version 6</a>
              </li>
              <li><a href="index-07.html">Home Version 7</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="active" href="about.html">Pages</a>
            <ul class="dropdown">
              <li><a class="active" href="about.html">About</a>
              </li>
              <li><a href="services.html">Services</a>
              </li>
              <li><a href="right-sidebar.html">Right Sidebar</a>
              </li>
              <li><a href="left-sidebar.html">Left Sidebar</a>
              </li>
              <li><a href="404.html">404 Page</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Shortcodes</a>
            <ul class="dropdown">
              <li><a href="tabs.html">Tabs</a>
              </li>
              <li><a href="buttons.html">Buttons</a>
              </li>
              <li><a href="action-box.html">Action Box</a>
              </li>
              <li><a href="testimonials.html">Testimonials</a>
              </li>
              <li><a href="latest-posts.html">Latest Posts</a>
              </li>
              <li><a href="latest-projects.html">Latest Projects</a>
              </li>
              <li><a href="pricing.html">Pricing Tables</a>
              </li>
              <li><a href="accordion-toggles.html">Accordion & Toggles</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="portfolio-3.html">Portfolio</a>
            <ul class="dropdown">
              <li><a href="portfolio-2.html">2 Columns</a>
              </li>
              <li><a href="portfolio-3.html">3 Columns</a>
              </li>
              <li><a href="portfolio-4.html">4 Columns</a>
              </li>
              <li><a href="single-project.html">Single Project</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="blog.html">Blog</a>
            <ul class="dropdown">
              <li><a href="blog.html">Blog - right Sidebar</a>
              </li>
              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
              </li>
              <li><a href="single-post.html">Blog Single Post</a>
              </li>
            </ul>
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
              <li><a href="#">Home</a></li>
              <li>About Us</li>
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

              <form class="navbar-form navbar-left" id="req_form" action="" method="post">
                  <div class="form-group">
                      <label>Full Name :  </label><input type="text" id="name" name="name" class="form-control" placeholder="Ex :- Akila wasala">
                  </div>
                  <br><br><br>

                  <div class="form-group">
                      <label>Enter the email address :  </label><input type="email" id="textF" name="email" class="form-control" placeholder="*************@gmail.com"><br><br>
                  </div>
                  <br><br>

                  <div class="form-group">
                      <label>Country :  </label><input type="text" id="textF" name="country" class="form-control" placeholder="Sri Lanka"><br/><br>
                  </div>
                  <br>
                  
                  <div class="form-group">
                    <br><label>ID card No or Passport No :  </label><input type="text" id="textF" name="passportNo" class="form-control" placeholder="**********V"><br><br>       
                  </div>
                  <br>

                  <div class="form-group">
                    <br><label>Contact No :  </label><input type="text" id="textF" name="contactNo" class="form-control" placeholder="+947********"><br><br>       
                  </div>
                  <br>

                   <div class="form-group">
                    <br><label>Fax :  </label><input type="text" id="textF" name="fax" class="form-control" placeholder="0************"><br><br>       
                  </div>
                  <br>

                  <div class="form-group">
                    <br><label>Comments :  </label><input type="text" id="textF" name="comments" class="form-control" placeholder="Special requirements"><br><br>       
                  </div>
                  <br>

                  <div>
                  <button type="submit" class="btn btn-primary" name="submit1">Send Request</button>
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
                    <div class="panel-body"><img class="img-thumbnail image-text" style="float:left; width:150px;" alt="" src="images/selected.jpg" /> 
                            <form class="navbar-form navbar-left" id="req_form" action="" method="post">

                        <div class="form-group">
                            <label>Vehicle Name : </label> <?php echo $vehicle ?>

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
                    <div class="panel-body">The Expences for the whole jurney is : 45,000 LKR<br>Mileage Limitation : 100Kms/day<br>Excess Mileage : 150LKR per KM</div>
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
                  <div class="member-name">John Doe <span>Developer</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                  <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
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
                  <div class="member-name">Silly Sally <span>Developer</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                  <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
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
                  <div class="member-name">Chris John <span>Developer</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                  <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
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
                  <div class="member-name">Sara John <span>Developer</span></div>
                </div>
                <!-- Memebr Words -->
                <div class="member-info">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                </div>
                <!-- Memebr Social Links -->
                <div class="member-socail">
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                  <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                  <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                  <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                </div>
              </div>
            </div>
            <!-- End Memebr 4 -->

          </div>
          <!-- End Team Members -->

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <!-- Start Clients Carousel -->
          <div class="our-clients">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Services </span></h4>

            <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

              <!-- Client 1 -->
              <div class="client-item item">
                <a href="#"><img src="images/c1.png" alt="" /></a>
              </div>

              <!-- Client 2 -->
              <div class="client-item item">
                <a href="#"><img src="images/c2.png" alt="" /></a>
              </div>

              <!-- Client 3 -->
              <div class="client-item item">
                <a href="#"><img src="images/c3.png" alt="" /></a>
              </div>

              <!-- Client 4 -->
              <div class="client-item item">
                <a href="#"><img src="images/c4.png" alt="" /></a>
              </div>

              <!-- Client 5 -->
              <div class="client-item item">
                <a href="#"><img src="images/c5.png" alt="" /></a>
              </div>

              <!-- Client 6 -->
              <div class="client-item item">
                <a href="#"><img src="images/c6.png" alt="" /></a>
              </div>

              <!-- Client 7 -->
              <div class="client-item item">
                <a href="#"><img src="images/c7.png" alt="" /></a>
              </div>

              <!-- Client 8 -->
              <div class="client-item item">
                <a href="#"><img src="images/c8.png" alt="" /></a>
              </div>

            </div>
          </div>
          <!-- End Clients Carousel -->


        </div>
      </div>
    </div>
    <!-- End content -->


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