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
  <title>AMS :Manage Job Post </title>
  </head>
  <body>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Manage Job Posts</h6>
            <h2>Great companies are built on great products and great people.</h2>
            <p>When managing job posts, it's important to remember that the quality of your team is just as important as the quality of your product or service. By attracting and hiring great people
                , you can build a strong and effective team that can help drive your company's success. </p>
           
          </div>
        </div>

         <!--form start-->
        <div class="col-lg-6">
          <div class="contact-us-content">

            <form id="contact-form" action="job_posts.php" method="post">
             
                <!-- Company Name -->
                <div class="col-lg-12">
                  <fieldset>
                  <label class="label_form" class="label_form">Company Name:</label>
                    <input type="text" name="company_name"  required="" >
                  </fieldset>
                </div>

                <!--Title-->
                <div class="col-lg-12">
                  <fieldset>
                  <label class="label_form" class="label_form">Tittle:</label>
                    <input type="text" name="title" required="">
                  </fieldset>
                </div>

                <!--Job Description-->
                <div class="col-lg-12">
                  <fieldset>
                  <label class="label_form" class="label_form">Job Description:</label>
                    <textarea name="job_description"   required=""></textarea>
                  </fieldset>
                </div>

                <!-- button to add job post--> 
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" name="add" value="add"  class="orange-button" >add job post</button>
                  </fieldset>
                </div>

             
            </form>
          </div>
        </div>
        <!-- form End-->


      </div>
    </div>
  </div>
<br>
<br>
<br>


                      
                        <!--table-->
          <div class="container">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>CompanyName</th>
                <th>Title</th>
                <th>JobDescription</th>
                <th>Date</th>
                <th>Remove</th>
              </tr>
            </thead>
            <tbody>
            <?php
             $handler->get_all_data();
            ?>
            </tbody>
          </table>
  </div>
</body>

 

<?php require_once 'footer.php'; ?> 
</body>
</html>