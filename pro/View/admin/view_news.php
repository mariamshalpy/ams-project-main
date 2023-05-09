<?php
require_once 'header.php';
require_once '../../Controller/database.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <title>AMS :View News </title>
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

        
  



      <div class="section about-us" style="margin-top: 45px">


<div class="col-lg-6 offset-lg-1" style="margin-left: 26%">
    <div class="accordion" id="accordionExample" style="margin-top: 0px">


  <?php
   $data= new database();
  $post_data = $data->select('faculty_news_posts');
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
                                                href="post-<?php echo $post['Title']; ?>" aria-expanded="false"
                                                class="collapsed">
                                                <?php echo $post['Title'];?>
                                               
                                            </a>
                                        </h4>
                                    </div>


                            </button>
                        </h4>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- accordion for answer -->
                                <div id="post-<?php echo $post["Content"]; ?>" aria-expanded="false" role="tablist">
                                    <div class="panel-body">
                                        <div class="text-accordion">
                                          <p><b>Content:</b> <?php echo $post["Content"];?></p>
                                          <p><b>CreatedAt:</b> <?php echo $post["CreatedAt"];?></p>
                                        
                                       
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



        </div>


  
<?php require_once 'footer.php'; ?> 
</body>
</html>