<?php 
if (!isset($_SESSION['admin'])){
    exit();
}
include "function.php";
 if ($_SERVER['REQUEST_METHOD' == "POST"]){
     $name = $_POST['name'];
     $type = $_POST['type'];
     $reg = $_POST['registration'];
     $seat = $_POST['seating'];
     $engi = $_POST['engine'];
     $opt = $_POST['option'];
     $cost1 = $_POST['cost1'];
     $cost2 =$_POST['cost2'];
     $milel = $_POST['milelimit'];
     $excess = $_POST['excess'];
     $file = rand(1000,100000)."-".$_FILES['file']['name'];
     $file_loc = $_FILES['file']['tmp_name'];
     $file_size = $_FILES['file']['size'];
     $file_type = $_FILES['file']['type'];
     $folder="vimages/";
     move_uploaded_file($file_loc,$folder.$file);
     $res = add_vehicle($name, $type, $reg, $seat, $engi, $opt, $cost1, $cost2, $milel, $excess, $file, $type, $size);
 }
?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>BLOCKS - Bootstrap Dashboard Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/bootstrap.css" rel="stylesheet">
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/main.css" rel="stylesheet">
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/font-style.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.prepbootstrap.com/Content/css/single-page-admin/register.css">

	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/jquery-1.10.2.min.js"></script>    
    <script src="http://www.prepbootstrap.com/Content/js/single-page-admin/bootstrap.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	</head>
  <body>

  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="http://www.prepbootstrap.com/Content/images/shared/single-page-admin/logo30.png" alt=""> BLOCKS Dashboard</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li><a href="tables.html"><i class="icon-th icon-white"></i> Tables</a></li>
              <li><a href="login.html"><i class="icon-lock icon-white"></i> Login</a></li>
              <li class="active"><a href="user.html"><i class="icon-user icon-white"></i> User</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
        

        	
        	<div class="col-sm-10 col-lg-10 center">
        		<div id="register-wraper">
        		    <form id="register-form" class="form" ACTION = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
        		        <legend>Vehicle Register</legend>
        		    
        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name">Vehicle Name</label>
    		        		<input name="name" class="input-huge" type="text">
        		        	<!-- last name -->
    		        		<label for="surname">Vehicle Type</label>
    		        		<input name="type" class="input-huge" type="text">
        		        	<!-- username -->
        		        	<label>Registration No</label>
        		        	<input class="input-huge" name="registration" type="text">
        		        	<!-- email -->
        		        	<label>Seating Capacity</label>
        		        	<input class="input-huge" name="seating" type="text">
        		        	<!-- password -->
        		        	<label>Engine Capacity</label>
        		        	<input class="input-huge" name="engine" type="text">
                            <label>Vehicle Option</label>
        		        	<input class="input-huge" name="option" type="text">
                            <label>Cost For 1 day for less than 1 week</label>
        		        	<input class="input-huge" name="cost1" type="text">
                            <label>Cost For 1 day for less than 2 weeks</label>
        		        	<input class="input-huge" name="cost2" type="text">
                            <label>Mileage Limitation</label>
        		        	<input class="input-huge" name="milelimit" type="text">
                            <label>Excess Mileage</label>
        		        	<input class="input-huge" name="excess" type="text">
                            <label>Photos</label>
        		        	<input class="input-huge" type="file" name="file"><br>

        		        </div>
        		    
        		        <div class="footer">
        		            <label class="checkbox inline">
        		                <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree with the terms &amp; conditions
        		            </label>
        		            <button type="submit" class="btn btn-success">Register</button>
        		        </div>
        		    </form>
        		</div>
        	</div>

        </div>
    

	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="http://www.prepbootstrap.com/Content/images/shared/single-page-admin/logo.png" alt=""></p>
      			<p>Blocks Dashboard Theme - Crafted With Love - Copyright 2013</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->  
</body></html>