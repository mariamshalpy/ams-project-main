<?php
session_start();

//include 'surveycontroller.php';
require '../../Controller/handler.php'; 
require '../../Model/alumni&student/stucourse.php'; 
$errMsg="insert";
if(isset($_POST['send']))
{

  $c=new cour;
  $c->insert_data();

    $errMsg="";
  }
  
    

    
   




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
                    <li class="scroll-to-section"><a href="./home.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="./edit.php">Edit Profile</a></li>
              <li class="scroll-to-section"><a href="./courses.php">Courses</a></li>
              <li class="scroll-to-section"><a href="./events.php">Events</a></li>
              <li class="scroll-to-section"><a href="./message.php">Messages</a></li>
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
  <div class="main-banner" id="top" style="padding-bottom: 11px;"> </div> 
 
  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Participate Course</h6>
            <h2>“Participation, I think, or one of the best methods of educating.”</h2>
            
            
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
            <?php if($errMsg=="")
              {?>
                <div class="alert alert-success" role="alert">Thank You..</div>
                <?php
              }
              ?>
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Course Name..." autocomplete="on" required>
                  </fieldset>
                </div>
              
                <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                <div class="col-lg-12">
                
                  
                  <div class="form-outline mb-4">
                  <div class="form-outline">
                  <fieldset>
                  <textarea    placeholder="paticipate" required="">paticipate</textarea>
                  </fieldset>
        

                    <label class="form-label" for="role"></label>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-4">
                
                  <div class="form-outline">
                    <input type="date" name="bdate"   class="form-control" >
                    
            
                </div>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" name="send" id="form-submit" class="orange-button">Send</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
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
