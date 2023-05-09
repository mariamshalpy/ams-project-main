<?php
require_once 'header.php';
require_once "../../Model/staff/Job.php";
require_once "../../Controller/staff/jobHandler.php";



/**
 * 1 => get data                 
 * 2 => create new object from news class
 * 3 => set data in objct
 * 4 => create handler object 
 * 5 => send object to method addnews($new_news) 
 * 
 */


 $jobs_post = new Job();
 $handler =new Jobhandler();
                            
                      if(isset($_POST["title"])&& isset($_POST["company_name"]) && isset($_POST["job_description"]))
                      {
                        if(!empty($_POST["title"])  && !empty($_POST["company_name"]) && !empty($_POST["job_description"]))
                          {
                            $jobs_post->set_title(htmlspecialchars($_POST["title"]));
                            $jobs_post->set_companyName(htmlspecialchars($_POST["company_name"]));
                            $jobs_post->set_job_description(htmlspecialchars($_POST["job_description"]));
                            $jobs_post->set_createdAt();
                          }
                        } 
                    $handler->add_jobs($jobs_post);


        

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