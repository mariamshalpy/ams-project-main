<?php
require_once 'header.php';
require_once '../../Controller/database.php';

?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <title>AMS :View mentorship </title>
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
   $data= new database();
   $post_data = $data->select('mentorshipprogram');
 
  foreach ($post_data as $post): ?>
  <div class="col-lg-3 col-md-6 gy-4">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $post['Name']?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Event</h6>
    <p class="card-text"><?php echo $post['Description']?></p>
    <a  name="participate" href="partcourse.php" class="btn btn-secondary">Participate</a>
  </div>
</div></div>
  <?php endforeach; ?></div></div></div>
  
<?php require_once 'footer.php'; ?> 
</body>
</html>