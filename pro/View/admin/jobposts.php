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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>AMS :student</title>

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

    <div class="main-banner " style="padding: 10px 0px 120px 0px" id="top">
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


    <div class="section about-us" style="margin-top: 45px">


        <div class="col-lg-6 offset-lg-1" style="margin-left: 26%">
            <div class="accordion" id="accordionExample" style="margin-top: 0px">

                <?php $post_data = $data->select('job_posts');
                foreach ($post_data as $post): ?>
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="panel panel-default">

                                    <!-- button to show the question -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion_oneLeft" style="color:black"
                                                href="post-<?php echo $post['CompanyName']; ?>" aria-expanded="false"
                                                class="collapsed">
                                                <?php echo $post['CompanyName'];?>
                                               
                                            </a>
                                        </h4>
                                    </div>


                            </button>
                        </h4>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- accordion for answer -->
                                <div id="post-<?php echo $post["JobDescription"]; ?>" aria-expanded="false" role="tablist">
                                    <div class="panel-body">
                                        <div class="text-accordion">
                                          <p><b>Job Description:</b> <?php echo $post["JobDescription"];?></p>
                                          <p><b>Title:</b> <?php echo $post["Title"];?></p>
                                        
                                       
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

           

        </div>



        <footer style="margin-top:115px">
            <div class="container" style="min-height: 155px">
                <div class="col-lg-12">
                    <p>Copyright © 2036 Scholar Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a
                            href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a></p>
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
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</body>

</html>