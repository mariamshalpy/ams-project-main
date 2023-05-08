<?php
session_start();
include("../../Controller/database.php");
require_once("../../Controller/db_conn.php");
require_once("../../Model/alumni/events.php");
$data = new database();




?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>AMS </title>

  <!-- Bootstrap core CSS -->
  <link href="../../View/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../../View/assets/css/fontawesome.css">
  <link rel="stylesheet" href="../../View/assets/css/templatemo-scholar.css">
  <link rel="stylesheet" href="../../View/assets/css/owl.css">
  <link rel="stylesheet" href="../../View/assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--
TemplateMo 586 Scholar
https://templatemo.com/tm-586-scholar
-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->

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
            <!-- **** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="./home.php" class="active">Home</a></li>

              <li class="scroll-to-section"><a href="#courses">Courses</a></li>
              <li class="scroll-to-section"><a href="../../View/alumni/planevent.php"> Plan Events</a></li>
              <li class="scroll-to-section"><a href="./message.php">Messages</a></li>
              <li class="scroll-to-section"><a href="../../Controller/logout.php">Log out</a></li>




              <li class="scroll-to-section">
                <?php if ($_SESSION['name']) {
                  // code...
                  echo $_SESSION['name'];
                } ?>
              </li>
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

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-16">
          <div class="owl-carousel owl-banner">

            <div class="header-text">





            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        
  <?php 
//$plan->toplanevent();
  
  $q='SELECT events.ID, events.Name as eventname, `EventDescription`, place.Name as Place_name FROM `events`,`place` where events.PlaceId=place.ID;';
  $post_data=mysqli_query($conn,$q);
 /* $post_data = $data->select('events');
  if (isset($_POST['btnn'])){
    $where = array('name' => $_POST['name']);
    $data->update('events',['NumberOfAttendence'=>'$post_data["btn"]'], $where);
  }*/

  foreach ($post_data as $post): 
    if(count($post)>0)
    {$_SESSION['eventname']=$post['eventname'];
    $_SESSION['desc']=$post['EventDescription'];
    $_SESSION['pname']=$post['Place_name'];}?>

  <div class="col-lg-3 col-md-6 gy-4">
    <div class="card" style="width: 18rem;">
  <div class="card-body" method='get'>
    <h5 class="card-title"><?php echo $post['eventname']?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Event</h6>
    <p   class="card-text"> <b>Description:</b><?php echo $post['EventDescription']?></p>
    <p class="card-text"><b>PlaceName :</b><?php echo $post['Place_name']?></p>
    <a  name="participate" method='post' href="participate.php" class="btn btn-secondary">Participate</a>
    <!--<button  class="btn btn-secondary" >Participate</button>-->


  </div>
</div></div>
  <?php

 endforeach; ?></div></div></div>


<!--
  <a  style="margin-top: 119px;
    margin-left: 643px;" href="planevent.php" class="btn btn-secondary">Participate</a>-->


  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 Scholar Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a
            href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <!-- Bootstrap core JavaScript -->
  <script src="../../View/vendor/jquery/jquery.min.js"></script>
  <script src="../../View/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../View/assets/js/isotope.min.js"></script>
  <script src="../../View/assets/js/owl-carousel.js"></script>
  <script src="../../View/assets/js/counter.js"></script>
  <script src="../../View/assets/js/custom.js"></script>


</body>

</html>