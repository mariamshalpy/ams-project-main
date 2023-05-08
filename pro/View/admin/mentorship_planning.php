<?php
require_once 'header.php';
require_once "../../Model/Mentorship.php";
require_once "../../Model/Place.php";
require_once "../../Controller/programHandler.php";
require_once "../../Controller/admin/MentorshipRequestHandler.php";



/**
 * 1 => get data                 
 * 2 => create new object from news class
 * 3 => set data in objct
 * 4 => create handler object 
 * 5 => send object to method addnews($new_news) 
 * 
 */

$email = $_GET["email"];
$mentorship_name = $_GET["name"];
$mentorship_description = $_GET["description"];
$mentorship_type = $_GET["type"];
$mentorship_date = $_GET["date"];
 $program = new Program();
 $place =new Place();
 $handler =new Programhandler();
 $r_handler =new MentorshipRequestHandler;

                      // for Event class                           
                    //   if(isset($_POST["name"]) && isset($_POST["type"])  && isset($_POST["description"])&& isset($_POST["place"]) && isset($_POST["duration"]) && isset($_POST["place"]) && isset($_POST["date"]) && isset($_POST["time"]))
                    //   {
                        if(!empty($_POST["name"])  && !empty($_POST["type"]) && !empty($_POST["description"]) && !empty($_POST["place"]) && !empty($_POST["duration"]) && !empty($_POST["place"]) && !empty($_POST["date"]) && !empty($_POST["time"]))
                          {
                            $program->set_name(htmlspecialchars($_POST["name"]));
                            $program->set_type(htmlspecialchars($_POST["type"]));
                            $program->set_description(htmlspecialchars($_POST["description"]));
                            $program->set_duration(htmlspecialchars($_POST["duration"]));
                            $place->set_name(htmlspecialchars($_POST["place"]));
                            $place->set_date(htmlspecialchars($_POST["date"]));
                            $place->set_time_slot(htmlspecialchars($_POST["time"]));
                            $handler->add_program($program,$place);
                            $r_handler->updateStatus($email,'accepted');
                          }
                    //   } 
                    
             



                  
        

?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <title>AMS :Manage News</title>
  </head>
  <body>


  

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Manage MentorShip Program</h6>
            <h2>The delicate balance of mentoring someone is not creating them in your own image, but giving them the opportunity to create themselves.</h2>
            <p>A mentorship program is a relationship between an experienced person (mentor) and a less experienced person (mentee), with the goal of supporting the mentee's personal and professional growth. The mentor provides guidance, feedback, and support to the mentee, helping them gain new skills and perspectives, build their confidence, and make more informed decisions.</p>
           
          </div>
        </div>

        
         <!--form start-->
        <div class="col-lg-6">
          <div class="contact-us-content">

            <form id="contact-form" action="" method="post">

                 <!--Name-->
                <div class="col-lg-12">
                  <fieldset>
                    <label class="label_form" class="label_form">Tittle:</label>
                    <input type="text"  name="name" value="<?php echo htmlspecialchars($mentorship_name); ?>"  required="" >
                  </fieldset>
                </div>

                 <!-- Type -->
                <div class="col-lg-12">
                      <fieldset>
                       <div class="col-lg-12">
                       <select class="form-select" name="type">
                        <option value="">Type...</option>
                         <option value="Technical course" <?php if(isset($_GET['type']) && $_GET['type'] == 'Technical course'){echo 'selected';} ?>>Technical course</option>
                         <option value="Careerbuild" <?php if(isset($_GET['type']) && $_GET['type'] == 'Careerbuild'){echo 'selected';} ?>>Careerbuild</option>
                        </select>
                         </div>
                      </fieldset>
                 </div>
                
                 <!--Description-->
                <br>
                <div class="col-lg-12">
                  <fieldset>
                  <label class="label_form" class="label_form">Description:</label>
                    <textarea name="description"   required=""><?php echo htmlspecialchars($mentorship_description); ?></textarea>
                  </fieldset>
                </div>

                <!--Duration-->
                <div class="col-lg-12">
                  <fieldset>
                   <label class="label_form" class="label_form">Duration:</label>
                    <input type="text" name="duration"   required="">
                  </fieldset>
                </div>


                <!--Date-->   
                <div class="mb-3 row">  
                      <div class="col-md-10">
                      <label class="label_form">Date:</label>
                        <input class="form-control" type="date" name ="date" value="<?php echo htmlspecialchars($mentorship_date); ?>" id="html5-date-input" />
                      </div> 
                    </div>  

                   
                <!--place -->
                <div class="col-lg-12">
                      <fieldset>
                      <label class="label_form">Place:</label>
                      <div class="col-lg-12">
                        <select  class="form-select" name="place">

                                  <option selected>Type...</option>
                                  <option > Hall 1</option>
                                  <option> Hall 2</option>
                                  <option> Hall 3</option>
                                </select>
                         </div>
                      </fieldset>
                    </div>
                    <br>


                    
                 <!--Time -->
                 <div class="col-lg-12">
                      <fieldset>
                      <label class="label_form">Time:</label>
                      <div class="col-lg-12">
                        <select  class="form-select" name="time">

                                  <option selected>Time...</option>
                                  <option>from 9:00 to 11:00</option>
                                  <option>from 12:00 to 2:00</option>
                                  <option>from 3:00 to 6:00</option>
                                  <option>from 7:00 to 10:00</option>
                                </select>
                         </div>
                      </fieldset>
                    </div>
                    <br>
               
                 <!--button to start Program-->
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" name="add" value="add" class="orange-button">start Program</button>
                  </fieldset>
                </div>


            </form>
          </div>
        </div>

      </div>
    </div>
  </div>


 

  


</body>

 

<?php require_once 'footer.php'; ?> 
</body>
</html>