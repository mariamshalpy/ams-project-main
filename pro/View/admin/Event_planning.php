<?php
require_once 'header.php';
require_once "../../Model/Event.php";
require_once "C:/xampp/htdocs/ams-project-main/pro/Model/Place.php";
require_once "../../Controller/eventhandler.php";
require_once "../../Controller/admin/eventsRequestsHandler.php";




/**
 * 1 => get data                 
 * 2 => create new object from news class
 * 3 => set data in objct
 * 4 => create handler object 
 * 5 => send object to method addnews($new_news) 
 * 
 */



 $event_post = new Event();
 $place =new Place();
 $handler =new Eventhandler();
 $r_handler =new EventsRequestsHandler();

$email = $_GET["email"];
$event_name = $_GET["name"];
$event_description = $_GET["description"];
$event_date = $_GET["date"];

                      // for Event class                           
                    //  if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST["place"]) && isset($_POST['date']) && isset($_POST["time"]))
                    //  {
  if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST["place"]) && !empty($_POST['date']) && !empty($_POST["time"]))
  {
    $event_post->set_name(htmlspecialchars($_POST['name']));
    $event_post->set_description(htmlspecialchars($_POST['description']));
    $place->set_name(htmlspecialchars($_POST["place"]));
    $place->set_date(htmlspecialchars($_POST['date']));
    $place->set_time_slot(htmlspecialchars($_POST["time"]));
    $handler->add_events($event_post,$place);
    $r_handler->updateStatus($email,'accepted');
  }
//} 
                         
                        



                  

?>





<!DOCTYPE html>
<html lang="en">

  <head>
  <title>AMS :Manage Events</title>
  </head>
  <body>




  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Manage faculty news</h6>
            <h2>Effective communication is 20% what you know and 80% how you feel about what you know.</h2>
            <p>In managing faculty news, it's important to not only convey the information but also the enthusiasm and 
              importance of the news to the faculty members. 
              Effective communication can help ensure that the faculty members are engaged and motivated to act upon the news.</p>
           
          </div>
        </div>


        <!--form start-->

        <div class="col-lg-6">
  <div class="contact-us-content">
    <form id="contact-form" action="" method="post">
      
      <!--Name-->
<div class="col-lg-12">
  <fieldset>
    <label class="label_form">Name:</label>
    <input type="text" name="name" required="" value="<?php echo htmlspecialchars($event_name); ?>">
  </fieldset>
</div>

<!--Description-->       
<div class="col-lg-12">
  <fieldset>
    <label class="label_form"> Description: </label>
    <textarea name="description" placeholder=""><?php echo htmlspecialchars($event_description); ?></textarea>
  </fieldset>
</div>

<!--Date-->   
<div class="mb-3 row">  
  <div class="col-md-10">
    <label class="label_form">Date:</label>
    <input class="form-control" type="date" name ="date" value="<?php echo htmlspecialchars($event_date); ?>" id="html5-date-input" />
  </div> 
</div>  

      <!--Place -->
      <div class="col-lg-12">
        <fieldset>
          <label class="label_form">Place:</label>
          <div class="col-lg-12">
            <select  class="form-select" name="place">
              <option selected>Type...</option>
              <option> Hall 1</option>
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

      <!--Button add Event-->                          
      <div class="col-lg-12">
        <fieldset>
          <button type="submit" name="add" value="add" class="orange-button">add Event</button>
        </fieldset>
      </div>
    </form>
  </div>
</div>
  </div>



  <br>
<br>
<br>

   <div class="container">
      <table>
          <!--head table-->
          <thead>
            <tr>
              <th> ID </th>
              <th> Event Name </th>
              <th>Number of Attendence</th>
              <th>Description</th>
              <th> Place </th>
              <th> Date</th>
              <th>Time</th> 
              <th>action</th>
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