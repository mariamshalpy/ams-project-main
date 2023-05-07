<?php
session_start();
//include '../../Controller/db_conn.php';
require '../../Controller/handler.php';
include '../../Model/alumni/messoop.php';
include '../../Model/alumni/courseoop.php';
include '../../Model/alumni/commoop.php';
$obj=new database;
$me=new messoop;
$co=new courseoop;
$comm=new commoop;




?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

 	<link rel="stylesheet" type="text/css" href="../../View/signup.css">
	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>AMS :alumni</title>

    <!-- Bootstrap core CSS -->
    <link href="../../View/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../View/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../View/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="../../View/assets/css/owl.css">
    <link rel="stylesheet" href="../../View/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

</head>
<body>


  

 <!-- ***** Preloader Start ***** -->
 <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div> 
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="../../index.php" class="logo">
                        <h1>AMS</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="home.php" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#services">Services</a></li>
                      <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                      <li class="scroll-to-section"><a href="#events">Events</a></li>
                      <li class="scroll-to-section"><a href="../../Controller/logout.php">Log out</a></li>
                      <li class="scroll-to-section"><?php  if ($_SESSION['name']) {
                      	// code...
                      	echo $_SESSION['name'];
                      } ?></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
 
  <div class="main-banner" id="top" style="padding-bottom: 11px;">
  <img src="../../View/assets/images/student/comm.png" style="width: 1163px;
    margin-left: 135px;
    height: 560px;">
   </div> 
  
   
   <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<div>
<h2 style="margin-left: 617px;
    margin-right: 630px;
    margin-bottom: 65px;
    margin-top: 100px;
    color: #6953de;">Your Messages </h2>

<table>
  <tr>
    <th>Message From</th>
    <th>Content</th>
    <th>Role</th>
  </tr>
  <?php
  $comm->comm();
  /*
                          foreach($single_data as $content)  
                          {  
                ?>  
                          <td> <?php echo $content['email_from']?></td>
                          <td> <?php echo $content['content']?></td>
                          <td> <?php echo $content['role']?></td>
                          
                          </tr>
                         
                          <?php
                         }*/
                          ?>
                          </table>
                          <h2 style="margin-left: 617px;
    margin-right: 630px;
    margin-bottom: 65px;
    margin-top: 100px;
    color: #6953de;">Your Course Requests </h2>

                          <table>
  <tr>
    <th>Alumni Email</th>
    <th>Type</th>
    <th>Description</th>
    <th>name</th>
    <th>Status</th>
  </tr>
 <?php
$me->getevents();
 
 ?>
       </table>   
       <h2 style="margin-left: 617px;
    margin-right: 630px;
    margin-bottom: 65px;
    margin-top: 100px;
    color: #6953de;">Your course Requests </h2>

                          <table>
  <tr>
    <th>Alumni Email</th>
    <th>Type</th>
    <th>Description</th>
    <th>name</th>
    <th>Status</th>
  </tr>
 <?php
$co->getcourse();
 
 ?>
       </table>   
                 
                  
<footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 Scholar Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>
<!-- Section: Design Block -->
 <!-- Bootstrap core JavaScript -->
 <script src="../../View/vendor/jquery/jquery.min.js"></script>
  <script src="../../View/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../View/assets/js/isotope.min.js"></script>
  <script src="../../View/assets/js/owl-carousel.js"></script>
  <script src="../../View/assets/js/counter.js"></script>
  <script src="../../View/assets/js/custom.js"></script>
</body>
</html>
