<?php
     
require_once 'header.php';
require_once '../../Model/jobposts.php';
require_once '../../Controller/admin/jobpostshandler.php';



$handler = new JobPostHandler;
// $db = new database;
// $id = $_GET['ID'];
// if(isset($_POST["update"]))  
// {  
  
  

  
//      $update_data = array(  
          
//           'CompanyName'=>mysqli_real_escape_string($db->con, htmlspecialchars($_POST['CompanyName'])),  
//           'Title'=>mysqli_real_escape_string($db->con, htmlspecialchars($_POST['Title'])),
//           'JobDescription'=>mysqli_real_escape_string($db->con,htmlspecialchars($_POST['JobDescription']))
          
        
//         );  
        
//         $where_condition = array(
//           'ID' => $id
//       );
//     if($db->update("job_posts", $update_data, $where_condition))
//     {

     

//     }
    
      
      
      

//     }
  


    




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
           
           
          </div>
        </div>
       


        
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                </div>




                <!-- <div class="col-lg-12">
                  <fieldset>
                  <input type="date" id="myDate" name="myDate">
                  </fieldset>
                </div> -->


<?php
  $handler->selectrow();
?>
  

 
                   <div class="col-lg-12">

                <button type="submit" name="update" id="form-submit">Update</button>
                <button>  <a href ="job_posts.php"   >see updates</a>  </button>
               

                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  

  
                <?php
        




       
  

                ?>
                
              
<!--               
                <div class="container">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>CompanyName</th>
        <th>Title</th>
        <th>JobDescription</th>
        <th>CreatedAt</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

  


        <?php 
       

        // $new_job_post_handler->searchandselect();
        ?>
        
        
     
    </tbody>
  </table>
  </div>
</body> -->

                
 
  


  
 
    
 

<?php require_once 'footer.php'; ?> 
</body>
</html>




<!-- <script>
$(document).ready(function(){  
      $('.update').click(function(){  
           var ID = $(this).attr("id");  
             
           
                window.location = "job_posts.php";  
           
           
      });  
 });  
 </script> -->