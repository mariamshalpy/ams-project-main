<?php
session_start();

$errMsg="add";
//require '../../Controller/handler.php'; 
require '../../Model/alumni/feedbackoop.php'; 

if(isset($_POST['send']))
{
  $us=new feedbackoop;
  $us->getdata();

    $errMsg="";
  }




?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<title>AMS :student</title>

<!-- Bootstrap core CSS -->
<link href="../../View/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="../../View/assets/css/fontawesome.css">
<link rel="stylesheet" href="../../View/assets/css/templatemo-scholar.css">
<link rel="stylesheet" href="../../View/assets/css/owl.css">
<link rel="stylesheet" href="../../View/assets/css/animate.css">
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--
TemplateMo 586 Scholar
https://templatemo.com/tm-586-scholar
-->
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
                      <li class="scroll-to-section"><a href="../../View/alumni/" class="active">Home</a></li>
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


 <div class="main-banner" id="top" style="padding-bottom: 11px;"> </div> 
 <div class="contact-us section" id="contact" style="padding-bottom: 5px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6><strong>Feed Back</strong></h6>
            <h2> “Feedback is a gift. Ideas are the currency of our next success. Let people see you value both feedback and ideas.”</h2>
            <p>Thank you for this valuable feedback! We’re sorry to hear that you’re not happy with our product. We aim to improve the quality of our products, and we'll take your input into account. Please DM us, and we'll try to help.</p>
         
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
            <?php if($errMsg=="")
              {?>
                <div class="alert alert-success" role="alert">add Successfully</div>
                <?php
              }
              ?>
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>
               
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="content" id="message" placeholder="Your FeedBack"></textarea>
                  </fieldset>
                </div>
                <div class="form-outline mb-4">
                  <div class="form-outline">
                    <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="student">student</option>
			  <option value="alumni">Alumni</option>
                    </select>
        

                    <label class="form-label" for="role"></label>
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
    <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../../View/vendor/jquery/jquery.min.js"></script>
  <script src="../../View/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../View/assets/js/isotope.min.js"></script>
  <script src="../../View/assets/js/owl-carousel.js"></script>
  <script src="../../View/assets/js/counter.js"></script>
  <script src="../../View/assets/js/custom.js"></script>
</body>
</html>