<?php 
	session_start();
  require '../../Controller/handler.php'; 

$errMsg="insert";

if(isset($_POST['send']))
{
  $data=new database;
  if(isset($_POST['issue']) && isset($_POST['email_to']) && isset($_POST['email_from']) )
  {
  
    
  
    $where=array('email_to'=>$_POST['email_to'],'role'=>$_SESSION['role'],'content'=>$_POST['issue'],'email_from'=>$_POST['email_from']);
    $data->insert('it_support_email',$where);
    $errMsg="";
  }
  

}

 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>AMS :support</title>

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
                 >
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    <li class="scroll-to-section"><a href="./home.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="./edit.php">Edit Profile</a></li>
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


<div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Technical Issues</h6>
            <h2>"you should provide a perfect Solution for our users as soon as possible to improve our services."</h2>
            
         
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
              
                <div class="form-outline mb-4">
                  <div class="form-outline">
                    <select class="form-select mb-3"
		          name="email_to" 
		          aria-label="Default select example">
			 
			  <option >itsupport1@gmail.com</option>
        <option >itsupport2@gmail.com</option>
        <option >itsupport3@gmail.com</option>
        

                    <label class="form-label" for="email_to"></label>
                  </div>
                </div>
             
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email_from" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                  <input type="name" name="issue" id="Amount" placeholder="Your Issue..." autocomplete="on" required>
                  </fieldset>
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

  </body>
</html>



