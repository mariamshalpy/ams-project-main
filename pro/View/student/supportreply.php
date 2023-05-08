<?php 
	session_start();
  require '../../Controller/handler.php'; 

  require '../../Model/alumni&student/itmess.php'; 


$obj=new database;
$mess=new itmess;

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
<th>Message To</th>
<th>Content</th>
<th>Role</th>
</tr>
<?php
                        foreach($single_data as $content)  
                        {  
            ?>  
                        <td> <?php echo $content['email_from']?></td>
                        <td> <?php echo $content['email_to']?></td>
                        <td> <?php echo $content['content']?></td>
                        <td> <?php echo $content['role']?></td>
                        
                        </tr>
                        
                        <?php
                        }
                        ?>
                        </table>



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