
<?php
session_start();
require '../../Controller/handler.php'; 
$errMsg="update";
$userid=$_SESSION['name']; 
$use=new database;
$where=array('FirstName'=>$_SESSION['name']);
$data=$use->select_where('alumni',$where);
foreach($data as $row);
if(isset($_POST['Edit']))
{
    $name=$_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
	$address =$_POST['address'];
	$bdate = $_POST['bdate'];
	$password = $_POST['password'];
    $jobtitle = $_POST['jobtitle'];
    //$q="UPDATE `alumni` set FirstName='$name', Address='$address', PhoneNumber='$phonenumber', Password='$password',JobTitle='$jobtitle', BirthDate='$bdate',Email='$email' where FirstName='$userid' ";
    $update=array('FirstName'=>$_POST['name'],'PhoneNumber'=>$_POST['phonenumber'],'Password'=>$_POST['password'],'JobTitle'=>$_POST['jobtitle'],'BirthDate'=>$_POST['bdate'],'Email'=>$_POST['email']);
    $condition=array('FirstName'=>$_SESSION['name']);
    $use->update('alumni',$update,$condition);
    $errMsg='';
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
                      <li class="scroll-to-section"><a href="home.php" class="active">Home</a></li>
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
 

            <form  method="post" style="    padding-left: 99px;
    padding-top: 100px;
    padding-right: 100px;
    margin-top: 94px;
    border: 245px;
    border-color: purple;
    background: aliceblue;" >
              <h1>Edit </h1><br>
              <?php if($errMsg=="")
              {?>
                <div class="alert alert-success" role="alert">Updated Successfully</div>
                <?php
              }
              ?>
              
              <div class="row">
                <div class="col-md-6 mb-4">
                <label class="form-label"  for="name">Name</label>
                    <input type="text" name="name" id="name" required  class="form-control" value="<?php echo $row['FirstName'];?>">
                    
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <label class="form-label" for="address">Address</label>
                    <input type="text"  id="address" name="address" required  class="form-control" value="<?php echo $row['Address'];?>" >
                    
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
              <label class="form-label" for="email">Email address</label>
                <input type="text"  id="email" name="email" required  class="form-control" value="<?php echo $row['Email'];?>">
               
              </div>
            

              <!-- Password input -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <label class="form-label" for="bdate">Date of birth</label>
                    <input type="text" id="bdate" name="bdate" required  class="form-control" value="<?php echo $row['BirthDate'];?>" >
                   
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <label class="form-label" for="password">Password</label>
                    <input type="password"  id="password" name="password" required  class="form-control" value="<?php echo $row['Password'];?>">
                    
                  </div>
                </div>
              </div>
              
				<div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <label class="form-label" for="phonenumber">Phone Number</label>
                    <input type="text"  id="phonenumber" name="phonenumber" required  class="form-control"  value="<?php echo $row['PhoneNumber'];?>" >
                    
                  </div>
                </div>
               
              </div>
              <div class="form-outline mb-4">
              <label class="form-label" for="jobtitle">Job Title</label>
                <input type="text"  id="jobtitle" required placeholder="Job title" name="jobtitle" class="form-control" value="<?php echo $row['JobTitle'];?>">
                
              </div>
              
           

              <!-- Submit button -->
              <input type="submit" class="btn btn-primary btn-block mb-4" value="Edit" name="Edit">
              
                
                
            

                
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
