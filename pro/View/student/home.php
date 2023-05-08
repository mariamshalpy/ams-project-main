<?php
session_start();
include "../../Controller/db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>AMS :student</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/templatemo-scholar.css">
  <link rel="stylesheet" href="../assets/css/owl.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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
            <!-- **** Logo End ***** -->
          
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="./home.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="./edit.php">Edit Profile</a></li>
              <li class="scroll-to-section"><a href="./courses.php">Courses</a></li>
              <li class="scroll-to-section"><a href="./events.php">Events</a></li>
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
    
              






        <div class=" col-md-12 ">
          <div class="row ">
            <div class=" col-md-4">
              <a href="./events.php">
                <div class="item">
                  <div class="image">
                    <img src="../assets/images/student/event.png" alt="" style="max-width: 44px;">
                  </div>
                  <h4>Events</h4>
                </div>
              </a>
            </div>

            <div class=" col-md-4">
              <a href="./faq.php">
                <div class="item">
                  <div class="image">
                    <img src="../assets/images/student/faq.png" alt="" style="max-width: 44px;">
                  </div>
                  <h4>FAQ</h4>
                </div>
              </a>
            </div>

            <div class=" col-md-4">
              <a href="./news.php">
                <div class="item">
                  <div class="image">
                    <img src="../assets/images/student/newspaper-folded.png" alt="" style="max-width: 44px;">
                  </div>
                  <h4>News</h4>
                </div>
              </a>
            </div>
          </div>


          <div class="row  ">
            <div class="col-md-4 gy-5">
              <a href="./feedback.php">
                <div class="item">
                  <div class="image">
                    <img src="../assets/images/student/feedback.png" alt="" style="max-width: 44px;">
                  </div>
                  <h4>Feedback</h4>
                </div>
              </a>
            </div>

            <div class="col-md-4 gy-5">
              <a href="./communicate.php">
                <div class="item">
                  <div class="image">
                    <img src="../assets/images/student/communication.png" alt="" style="max-width: 44px;">
                  </div>
                  <h4>Communicate</h4>
                </div>
              </a>
            </div>

            <div class="col-md-4 gy-5">
              <a href="./survey.php">
                <div class="item">
                  <div class="image">
                    <img src="../assets/images/student/survey.png" alt="" style="max-width: 44px;">
                  </div>
                  <h4>Survey</h4>
                </div>
              </a>
            </div>
          </div>

          <div class="row  ">
            <div class="col-md-4 gy-5">
              <a href="./courses.php">
                <div class="item">
                  <div class="image">
                    <img src="../assets/images/student/courses.png" alt="" style="max-width: 44px;">
                  </div>
                  <h4>Courses</h4>
                </div>
              </a>
            </div>

            <div class="col-md-4 gy-5">
              <a href="./jobposts.php">
                <div class="item">
                  <div class="image">
                    <img src="../assets/images/student/jobpost.png" alt="" style="max-width: 44px;">
                  </div>
                  <h4>Job Posts</h4>
                </div>
              </a>
            </div>

            <div class="col-md-4 gy-5">
              <a href="./itsupport.php">
                <div class="item">
                  <div class="image">
                    <img src="../assets/images/student/newspaper-folded.png" alt="" style="max-width: 44px;">
                  </div>
                  <h4>It Support</h4>
                </div>
              </a>
            </div>
          </div>
        </div>
      
    




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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/counter.js"></script>
    <script src="../assets/js/custom.js"></script>

</body>

</html>