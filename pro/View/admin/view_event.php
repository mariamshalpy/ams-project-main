<?php
require_once 'header.php';
   

?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <title>AMS :View Events </title>
  </head>
  <body>
  
    <div class="container">
      <div class="row">
        <div class="col-lg-16">
          <div class="owl-carousel owl-banner">

            
          </div>
        </div>
      </div>
    </div>

<br>
<br>

<br>
<br>
  <div class="features">
    <div class="container">
      <div class="row">

  <?php 
  $q='SELECT events.ID, events.name as eventname, `EventDescription`, place.Name as Place_name FROM `events`,`place` where events.PlaceId=place.ID;';
  $conn = mysqli_connect("localhost", "root", "", "ams");
  $post_data=mysqli_query($conn,$q);
 
 
  foreach ($post_data as $post): ?>

  <div class="col-lg-3 col-md-6 gy-4">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $post['eventname']?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Event</h6>
    <p   class="card-text"> <b>Description:</b><?php echo $post['EventDescription']?></p>
    <p class="card-text"><b>PlaceName :</b><?php echo $post['Place_name']?></p>
    <a  name="participate" href="partevent.php" class="btn btn-secondary">Participate</a>
    
  </div>
</div></div>  
  <?php endforeach; ?></div></div></div>
 

<?php require_once 'footer.php'; ?> 
</body>
</html>