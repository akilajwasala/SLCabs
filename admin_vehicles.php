<?php

if (!isset($_SESSION['admin'])){
    exit();
}

include ("function.php");


$res = view_vehicle($conn);

?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>BLOCKS - Bootstrap Dashboard Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />    
    <!-- DATA TABLE CSS -->
    <link href="http://www.prepbootstrap.com/Content/css/single-page-admin/table.css" rel="stylesheet">
        
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/bootstrap.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/admin.js"></script>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        
  	<!-- Google Fonts call. Font Used Open Sans -->
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/single-page-admin/datatables/jquery.dataTables.js"></script>
  			<script type="text/javascript" charset="utf-8">
  			    $(document).ready(function () {
  			        $('#dt1').dataTable();
  			    });
	</script>

    
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
             <li class="active"><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li class="active"><a href="index.html"><i class="icon-home icon-white"></i> Vehicles</a></li>
                <li class="active"><a href="index.html"><i class="icon-home icon-white"></i>Reservations</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			
			  <!--/END First Table -->
			 <br>
			 <!--SECOND Table -->


		<h4><strong>Data Table</strong></h4>

		<table class="display" id="dt1">
        <thead>
        <tr>
            <th>Vehicle Name</th>
            <th>Vehicle Type</th>
            <th>Registration No</th>
            <th>Seating Cap</th>
            <th>Cost For 1 day</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($data = mysqli_fetch_assoc($res))
        {
            $name = $data['vehicleName'];
            $type =  $data['vehicleType'];
            $reg = $data['registrationNo'];
            $seat =  $data['seatingCapacity'];
            $cost1 =  $data['for1Week'];
        echo "<tr class='gradeA'>
            <td>$name</td>
            <td>$type</td>
            <td>$reg</td>
            <td>$seat</td>
            <td>$cost1</td>
            
        </tr>";
        
        }
                ?>
    </tbody>
      </table><!--/END SECOND TABLE -->
	
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	<br>	

      	<!-- /container -->
      	<br>
	<!-- FOOTER -->	
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p>2015 - SLCabs Pvt Ltd. Sri Lanka</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->


  

  
</body></html>