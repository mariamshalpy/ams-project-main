<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

 

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/templatemo-scholar.css">
  <link rel="stylesheet" href="../assets/css/owl.css">
  <link rel="stylesheet" href="../assets/css/table.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/5d5d5f5e54.js" crossorigin="anonymous"></script>
 
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

  <div class="main-banner" id="top"  style="padding : 120px ">
    <div class="container">
      <div class="row">
        <div class="col-lg-16">
            <div class="header-text">  </div>
        </div>
      </div>
    </div>
  </div>
  


  <div class="features">
    <div class="container">
      <div class="row">





      <!--accounts-->
      <div class="col-lg-3 col-md-6" style="padding : 20px ">
          <a href="./accounts.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/staff/account-icon.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Accounts</h4>
            </div>
          </a>
        </div>
        
         <!--Events-->
         <div class="col-lg-3 col-md-6 " style="padding : 20px ">
          <a href="./events.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/staff/event.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Events</h4>
            </div>
          </a>
        </div>

         <!--Job post-->
         <div class="col-lg-3 col-md-6" style="padding : 20px ">
          <a href="../job_posts.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/staff/job-post.png" alt="" style="max-width: 44px;">
              </div>
              <h4>job Posts</h4>
            </div>
          </a>
        </div>

        


        <!-- survey-->
        <div class="col-lg-3 col-md-6" style="padding : 20px ">
          <a href="survey.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/staff/feedback.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Survey</h4>
            </div>
          </a>
        </div>

       


         <!--Mentorship Programs-->
         <div class="col-lg-3 col-md-6" style="padding : 20px ">
          <a href="./mentorship_program.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/staff/training-icon.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Mentorship Programs</h4>
            </div>
          </a>
        </div>

       

        <!--News-->
        <div class="col-lg-3 col-md-6" style="padding : 20px ">
          <a href="./faculty_news.php">
            <div class="item">
              <div class="image">
                <img src="../../View/assets/images/staff/newspaper-folded.png" alt="" style="max-width: 44px;">
              </div>
              <h4>News</h4>
            </div>
          </a>
        </div>
    <br>
                    <?php require_once 'footer.php'; ?> 
</body>
</html>