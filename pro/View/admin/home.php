<?php 
	session_start();

  require_once '../../Controller/database.php';
  $data = new database;
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>AMS :admin</title>

<!-- Bootstrap core CSS -->
    <link href="../../View/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../View/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../View/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="../../View/assets/css/owl.css">
    <link rel="stylesheet" href="../../View/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--zz
TemplateMo 586 Scholar
https://templatemo.com/tm-586-scholar
-->
  </head>

<body>
<style>
li a, .dropbtn1 {
  display: inline-block;
  color:red;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}
li.dropdown1 {
  display: inline-block;
}
.dropdown1-content {
  display: none;
  position: absolute;
  display: none;
  position: absolute;
  background-color: #7a6ad8;
  box-shadow: 0px 0px 0px 0px ;
  z-index: 1;
  border-radius: 20px;
}
.dropdown1-content a {
  padding: 5px ;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown1-content a:hover {
  background-color : #4f448d;
  border-radius: 20px;
}
.dropdown1:hover .dropdown1-content {
  display: block;
}
</style>


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


              <li class="scroll-to-section"><a href="home.php" class="active">Home</a></li>

                              <!--still working on add ALumni-->
           

                              <li class="scroll-to-section"><a href="mange_faq.php">FAQ</a></li>

                              <!--DONE-->
              

                            <!--Job Post : DONE-->
              
                             <!-- Mentorship Program :DONE-->
            

                             <!-- News :DONE-->
             
             

              <li class="scroll-to-section"><a href="editprofile1.php">Profile</a></li>

                          <!--still working on survey-->
             

                           <!--DONE-->
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
       
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#feedback">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/admin/feedback.png" alt="" style="max-width: 44px;">
              </div>
              <h4>feed back</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 ">
          <a href="./Event_requests.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/admin/event.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Events</h4>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6">
          <a href="./Events.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/admin/charity-donation.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Donations</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="./faculty_news.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/admin/newspaper-folded.png" alt="" style="max-width: 44px;">
              </div>
              <h4>News</h4>
            </div>
          </a>
        </div>
            <br>
            <br>
            <br>
        <div class="col-lg-3 col-md-6">
          <a href="./mentorship_requests.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/admin/training-icon.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Mentorship Programs</h4>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6">
          <a href="./job_posts.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/admin/job-post.png" alt="" style="max-width: 44px;">
              </div>
              <h4>job Posts</h4>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6">
          <a href="./Event_requests.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/admin/email.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Requests</h4>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6">
          <a href="./manage_accounts.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/admin/account-icon.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Accounts</h4>
            </div>
          </a>
        </div>
        



  
  </section>
  <div class="section testimonials" id="feedback">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <?php 
            $post_data = $data->select('feedback');
            foreach($post_data as $post)
            {

              $name = $post["name"];
              $content = $post["content"];
              $role = $post["role"];

              ?>
              <div class="item">
               <p><?php echo $content?> </p>
              <div class="author">
                <span class="category"><?php echo $role?></span>
                <h4><?php echo $name?></h4>
              </div> 
            </div>
              <?php
              
            }
            ?>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>FEEDBACK</h6>
            <h2>What they say about us?</h2>
            <!-- <p>You can search free CSS templates on Google using different keywords such as templatemo portfolio, templatemo gallery, templatemo blue color, etc.</p> -->
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