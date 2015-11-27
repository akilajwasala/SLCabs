<?php

if(isset($_POST["submit"])){
  $user = mysql_real_escape_string($_POST["username"]);
  $pass = $_POST["password"];
  //$custID;
  
  $con = mysql_connect('localhost','root','') or die (mysql_error());
  mysql_select_db('slcabs') or die ("cannot select DB");    
    
  $sql = mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
  //$sql1 = mysql_query("SELECT custID FROM login WHERE username='".$user."'");
  
    
  $count =  mysql_num_rows($sql);
    
  if($count!=0){
    while ($row = mysql_fetch_assoc($sql)) {
      $dbusername = $row['username'];
      $dbpassword = $row['password'];
    }

    if( $user == $dbusername && $pass == $dbpassword){
      session_start();
      $_SESSION["sess_user"] = $user;
      header("Location: index1.php");
    }
  }else{
    echo '<script language="javascript">';
    echo 'alert("Incorrect Username or Password!!!")';
    echo '</script>';
    echo "<script>location.assign('index.php')</script>";
  }
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
                <a href="vehicles.html">Vehicles</a>
              </li>
              <li>
                <a href="blog.html">Tours</a>
              </li>
			        <li>
                <a href="about.html">About</a>
              </li>
              <li><a href="contact.html">Contact</a></li>
			        <li>
                <a>Login</a>
                <ul class="dropdown" style="border: 1px solid red;">
                      <center>
                      <br>
                      <form action="" method="POST">
                      <div><strong>Username</strong><input type="text" name="username" placeholder="Johny@Dep"></div>
                      <div style="padding-top: 10px;"><strong>Password</strong><input type="password" name="password" placeholder="*******"></div>
                      <div style="padding-top: 10px; padding-bottom: 10px;"><input type="submit" name="submit" value="login"></div>
                      </form>
                      </center>
                </ul>
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
                <a href="vehicles.html">Vehicles</a>
              </li>
              <li>
                <a href="blog.html">Tours</a>
              </li>
			        <li>
                <a href="about.html">About</a>
              </li>
              <li><a href="contact.html">Contact</a></li>
			        <li>
                <a>Login</a>
                <ul class="dropdown" style="border: 1px solid red;">
                      <center>
                      <br>
                      <form action="" method="POST">
                      <div><strong>Username</strong><input type="text" name="username" placeholder="Johny@Dep"></div>
                      <div style="padding-top: 10px;"><strong>Password</strong><input type="password" name="password" placeholder="*******"></div>
                      <div style="padding-top: 10px; padding-bottom: 10px;"><input type="submit" name="submit" value="login"></div>
                      </form>
                      </center>
                </ul>
              </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->


    <!-- Start HomePage Slider -->

    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="images/slider/bg1.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2 white">
                  <span>Welcome to <strong>SLCABS</strong></span>
              </h2>
                <h3 class="animated3 white">
               <span>The ultimate Luxury Vehicle Provider</span>
           </h3>
                <p class="animated4"><a href="reservation.php" class="slider btn btn-system btn-large">Reserve Now</a></p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/bg2.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2 white">
                  <span>Welcome to <strong>SLCABS</strong></span>
              </h2>
                <h3 class="animated3 white">
               <span>The ultimate Luxury Vehicle Provider</span>
           </h3>
                <p class="animated6"><a href="reservation.php" class="slider btn btn-system btn-large">Reserve Now</a></p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7">
                <span>The way of <strong>Success</strong></span>
            </h2>
                <h3 class="animated8 white">
               <span>Why you are waiting</span>
           </h3>
                <div class="">
                  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="reservation.php">reserve Now</a>
                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End HomePage Slider -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">

        <!-- Start Services Icons -->
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-magic icon-medium-effect icon-effect-2"></i>
            </div>
            <div class="service-content">
              <h4>Big collection of vehicles</h4>
              <p>You can rent any kind of vehicles.</p>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-magic icon-medium-effect icon-effect-2"></i>
            </div>
            <div class="service-content">
              <h4>Comprehensive insurance</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor.</p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-magic icon-medium-effect icon-effect-2"></i>
            </div>
            <div class="service-content">
              <h4>24 hour break down service</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor.</p>
            </div>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-magic icon-medium-effect icon-effect-2"></i>
            </div>
            <div class="service-content">
              <h4>Child seats - free of charge</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor.</p>
            </div>
          </div>
          <!-- End Service Icon 4 -->

        </div>
        <!-- End Services Icons -->

        <!-- Divider -->
        <div class="hr1 margin-top"></div>


        <!-- Start Recent Projects Carousel -->
        <div class="recent-projects">
          <h4 class="title"><span>Our Services</span></h4>
          <div class="projects-carousel touch-carousel">

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="Wedding hires" href="images/wedding.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/wedding1.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Vehicle for wedding hires</h4>
                    <span>SLCabs</span>
                    <span>All Right Reserved</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Lorem Ipsum Dolor</h4>
                    <span>Logo</span>
                    <span>Animation</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End Recent Projects Carousel -->

        <!-- Divider -->
        <div class="hr1 margin-60"></div>


        <div class="row">
          <div class="col-md-8">

            <!-- Start Recent Posts Carousel -->
            <div class="latest-posts">
              <h4 class="classic-title"><span>Latest News</span></h4>
              <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

                <!-- Posts 1 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 2 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Link Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 3 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 4 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 5 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 6 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Recent Posts Carousel -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Testimonials</span></h4>

            <!-- Start Testimonials Carousel -->
            <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
              <!-- Testimonial 1 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="testimonial-author"><span>John Doe</span> - Customer</div>
              </div>
              <!-- Testimonial 2 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="testimonial-author"><span>John Doe</span> - Customer</div>
              </div>
              <!-- Testimonial 3 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="testimonial-author"><span>John Doe</span> - Customer</div>
              </div>
            </div>
            <!-- End Testimonials Carousel -->

          </div>
        </div>

        <!-- Divider -->
        <div class="hr1 margin-60"></div>


        <!-- Start Call Action -->
        <div class="call-action call-action-boxed call-action-style1 clearfix">
          <!-- Call Action Button -->
          <div class="button-side" style="margin-top:4px;"><a href="#" class="btn-system btn-large">Register Now</a></div>
          <!-- Call Action Text -->
          <h2 class="primary"><strong></strong> Have a safe jouney with <strong>SLCabs!!</strong></h2>
          <p>Credit card payments are allowed only for registered users.</p>
        </div>
        <!-- End Call Action -->

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
              <h4><img src="images/logo.png" class="img-responsive" alt="Footer Logo" /></h4>
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
              <p>&copy; 2014 SLCabs - All Rights Reserved <a href="http://graygrids.com">GrayGrids</a> </p>
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

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>