<?php
require_once 'header.php';
require_once '../../Controller/admin/faqHandler.php';
require_once '../../Controller/database.php';
$faq_handler = new FaqHandler;
$success_message = ''; 
?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <title>AMS :Manage Accounts</title>
  </head>
  <body>
  <div class="container">
  <div class="container search-container">
  </div>
  <table>  
    <h3>Admin</h3>
                          <tr> 
                               <td >Questions</td>  
                               <td >Answers</td>  
                               <td >AdminId</td>  
                               <td >Option</td>
                          </tr>  
                          <?php
                          $faq_handler->getAllFaq();
                          ?>  
                     </table>
  </div>
 <!-- File input -->
 <div class="card">
</body>
<?php require_once 'footer.php'; ?> 
</body>
</html>
