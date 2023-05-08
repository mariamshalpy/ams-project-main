<?php 
	session_start();
//require '../../Controller/handler.php'; 
require '../../Model/alumni&student/donateoop.php'; 
  $errMsg="insert";
  if(isset($_POST['donate']))
  {
    
    $u=new donateoop;
    $u->getdata();
    $errMsg="";
   /* if(isset($_POST['email']) && isset($_POST['amount']))
  {
    $name=$_POST['email'];
    $amount=$_POST['amount'];
    
    $data=array('alumni_email'=>$_POST['email'],'Amount'=>$_POST['amount']);
    $use->insert('donation',$data);
    $errMsg="";
  }*/
  }
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

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
                    <div class="search-input">
                      <form id="search" action="#">
                        
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="../../View/alumni/itsupport.php">Technical Issue</a></li>
                      <li class="scroll-to-section"><a href="../../View/alumni/facultynews.php">Faculty News</a></li>
                      <li class="scroll-to-section"><a href="../../View/alumni/editprofile1.php">Edit profile</a></li>
                      <li class="scroll-to-section"><a href="../../View/alumni/message.php">Messages</a></li>
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

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-16">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Our Courses</span>
                <h2>With Scholar Teachers, Everything Is Easier</h2>
                <p>Scholar is free CSS template designed by TemplateMo for online educational related websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's Scholar?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Best Result</span>
                <h2>Get the best result out of your effort</h2>
                <p>You are allowed to use this template for any educational or commercial purpose. You are not allowed to re-distribute the template ZIP file on any other website.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's the best result?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Online Learning</span>
                <h2>Online Learning helps you save the time</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporious incididunt ut labore et dolore magna aliqua suspendisse.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's Online Course?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="../../View/alumni/feedback.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/student/feedback.png" alt="" style="max-width: 44px;">
              </div>
              <h4>feed back</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 ">
          <a href="../../View/alumni/events.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/student/event.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Events</h4>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6">
          <a href="../../View/alumni/faq.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/student/faq.png" alt="" style="max-width: 44px;">
              </div>
              <h4>FAQ</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="../../View/alumni/news.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/student/newspaper-folded.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Job Posts</h4>
            </div>
          </a>
        </div>
        <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6" style="padding-top: 113px;
    padding-right: 17px;
    padding-left: 4px;">
          <a href="#contact">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/student/donation.jpg" alt="" style="max-width: 44px;">
              </div>
              <h4>Donation</h4>
            </div>
          </a>
        </div>
       <div class="col-lg-3 col-md-6" style= "padding-top: 118px;">
          <a href="../../View/alumni/survey.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/student/checklist.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Survey</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6" style= "padding-top: 118px;">
          <a href="../../View/alumni/courses.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/student/online-course.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Courses</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6" style= "padding-top: 118px;">
          <a href="../../View/alumni/com.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/student/chat.png" alt="" style="    max-width: 44px;">
              </div>
              <h4>Communication</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Donate Now</h6>
            <h2>“Happiness doesnt result from what we get, but from what we give."</h2>
            <p>We know you have a lot of choices when it comes to donating, and we are so grateful that you chose to donate to our cause. We promise to be responsible stewards of both your donation and your trust.</p>
         
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
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                  <input type="name" name="amount" id="Amount" placeholder="Your Amount..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" name='donate'id="form-submit" class="orange-button">Donate Now</button>
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