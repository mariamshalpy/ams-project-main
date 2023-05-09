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



<!--style of the drop down -->
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


  .label_form {
    margin-bottom: 5px;
    
    color:#dee2e6;
  }



  .white-button {
  background-color: white;
  color:#4f448d;
  border: none;
  padding: 5px; 
  margin-left: 20%;
  cursor: pointer;
  border-radius: 10px;
}

.white-button:hover {
  background-color:#dee2e6; /* set your desired hover color */
}

</style>
<!--End style of the drop down -->

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


              <li class="scroll-to-section"><a href="home.php" class="active">Home</a></li>

                            
              <li class="scroll-to-section"><a href="accounts.php">Add Alumni</a></li>

                              <!--Event :DONE-->
              <div  class="scroll-to-section" >
              <li class="dropdown1">
                <a href="javascript:void(0)" class="dropbtn1">Event</a>
                <div class="dropdown1-content">
                 <a href=" view_event.php">View events</a>  
                <a href="Events.php">Manage Events</a>
               </div>
              </li>
              </div>

                            <!--Job Post : DONE-->
              <div  class="scroll-to-section" >
              <li class="dropdown1">
                <a href="javascript:void(0)" class="dropbtn1">Job Post</a>
                <div class="dropdown1-content">
                <a href="view_job_post.php">View Job Post</a> 
                <a href="job_posts.php">Manage Job Post</a>
               </div>
              </li>
              </div>

                             <!-- Mentorship Program :DONE-->
              <div  class="scroll-to-section" >
              <li class="dropdown1">
                <a href="javascript:void(0)" class="dropbtn1"> Mentorship Program</a>
                <div class="dropdown1-content">
                <a href="view_mentorship.php">View Mentorship Program</a>  
                <a href="mentorship_program.php">Manage Mentorship Program</a>
               </div>
              </li>
              </div>

                             <!-- News :DONE-->
              <div  class="scroll-to-section" >
              <li class="dropdown1">
                <a href="javascript:void(0)" class="dropbtn1">News</a>
                <div class="dropdown1-content">
                <a href="view_news.php">View News</a> 
                <a href="faculty_news.php">Manage News</a>
               </div>
              </li>
              </div>

                          <!--still working on survey-->
              <li class="scroll-to-section"><a href="survey.php">Survey</a></li>

              
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

  <div class="main-banner" id="top" style="padding : 48px ">
    <div class="container">
      <div class="row">
        <div class="col-lg-16">
            <div class="header-text">  </div>
        </div>
      </div>
    </div>
  </div>

</body>
 <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="../../View/vendor/jquery/jquery.min.js"></script>
    <script src="../../View/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../View/assets/js/isotope.min.js"></script>
    <script src="../../View/assets/js/owl-carousel.js"></script>
    <script src="../../View/assets/js/counter.js"></script>
    <script src="../../View/assets/js/custom.js"></script>        
</html>



  
