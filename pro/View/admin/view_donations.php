<?php
require_once 'header.php';
require_once '../../Controller/admin/donationHandler.php';
require_once '../../Controller/database.php';
$faq_handler = new DonationHandler;
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
                               <td >ID</td>  
                               <td >alumni_email</td>
                               <td >Amount</td>
                          </tr>  
                          <?php
                          $faq_handler->getAllDonations();
                          ?>  
                     </table>
  </div>
 <!-- File input -->
 <div class="card">
</body>
<?php require_once 'footer.php'; ?> 
</body>
</html>
