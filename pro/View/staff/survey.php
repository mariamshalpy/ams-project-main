<?php
require_once 'header.php';

require_once "../../Controller/staff/surveyHandler.php";



/**
 * 1 => get data                 
 * 2 => create new object from news class
 * 3 => set data in objct
 * 4 => create handler object 
 * 5 => send object to method addnews($new_news) 
 * 
 */


 $handler =new Surveyhandler();

?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <title>AMS :Manage Survey</title>
  </head>
  <body>




  <br>
  <br>
  <br>
  <br>
 


  <!--table-->
        <form method="POST" action="pdf.php" target="_blank">
        <div class="demo-inline-spacing">
          <button type="submit" name="pdf_creater"  class="btn btn-outline-primary"  style="margin-left: 80%; background-color:#6f42c1 ; border-color:#6f42c1 ; color:#ffffff">
          <a href="pdf.php" target="_blank" style="color:aliceblue;" > Survey Reports</a></button>
        </div>
        </form>
               
  
  <div class="container">
 
        <table>
          <!--head table-->
          <thead>
            <tr>
              <th>ID</th>
              <!-- <td>John Doe</td>-->
              <th>Name</th>
              <th>Content</th>
              <th>Rate </th>
              <th>Role </th>
            </tr>
          </thead>
          <!--End head table -->

          <!--body table-->
          <!--
          
        -->

          <tbody>
          <?php
             $handler->get_all_data();
            ?>
            
        </table>
        </div>





  
<?php require_once 'footer.php'; ?> 
</body>
</html>