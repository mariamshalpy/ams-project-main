<?php
 require_once 'header.php';
 require_once '../../Controller/database.php';
 require_once '../../Controller/admin/eventsRequestsHandler.php';

 $db = new database;
 $new_event_handler = new EventsRequestsHandler;

 

 
 if(isset($_GET["participation_delete"]))  
{  
     $where = array('ID'=>$_GET["ID"]);  
     if($db->delete("event_request", $where))  
     {  
          // header("location:manage_accounts.php?deleted=1");  
     }  
}  
if(isset($_GET["deleted"]))  
{  
     $success_message = 'data deleted';  
}
 if(isset($_GET["plan_delete"]))  
{  
     $where = array('ID'=>$_GET["ID"]);  
     if($db->delete("event_request", $where))  
     {  
          // header("location:manage_accounts.php?deleted=1");  
     }  
}  
if(isset($_GET["deleted"]))  
{  
     $success_message = 'data deleted';  
}
if(isset($_GET["accept_participation_request"])) {
  $ID = $_GET["ID"];
  $new_event_handler->accept_participation_request($ID); 
}


?>

<!DOCTYPE html>
<html lang="en">

  <head>
  <title>AMS :Manage News</title>
   
    
 
 

        <style>
          .yes-button,
        .no-button {
          background-color: #8c8c8c; /* Grey color */
          color: #fff; /* White text color */
          border: none;
          padding: 10px 20px;
          font-size: 16px;
          font-weight: bold;
          cursor: pointer;
          transition: background-color 0.3s ease;
        }

        .yes-button i,
        .no-button i {
          margin-right: 5px;
        }

        .yes-button:hover {
          background-color: #4CAF50; /* Green color */
        }

        .no-button:hover {
          background-color: #f44336; /* Red color */
        }
</style>
</header>
<body>




              <div class="container search-container">
              </div>
     
              <div class="container">
                <h4>Participate requests</h4>
                <table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>event_name</th>
                    <th>status</th>
                    <th>option</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $new_event_handler->getAllParticipateRequests();
                ?>
                </tbody>
                </table>
              </div>
              <div class="container search-container">
              </div>
     
              <div class="container">
                <h4>Plan requests</h4>
                <table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>event_name</th>
                    <th>status</th>
                    <th>option</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $new_event_handler->getAllPlanRequests();
                ?>
                </tbody>
                </table>
              </div>
</body>



 

<?php require_once 'footer.php'; ?> 
</body>
</html>
<script>  
$(document).ready(function() {  
  $('.participation_delete').on('click', function(event) {
    event.preventDefault();
    var ID = $(this).attr('id');  
    if (confirm('Are you sure you want to delete this post?')) {  
      window.location.href = 'Event_requests.php?participation_delete=1&ID=' + ID;  
    }  
  });  
}); 
$(document).ready(function() {  
  $('.plan_delete').on('click', function(event) {
    event.preventDefault();
    var ID = $(this).attr('id');  
    if (confirm('Are you sure you want to delete this post?')) {  
      window.location.href = 'Event_requests.php?plan_delete=1&ID=' + ID;  
    }  
  });  
}); 
 
document.addEventListener('DOMContentLoaded', function() {
    const updateButtons = document.querySelectorAll('.accept_participation_request');
    updateButtons.forEach(function(updateButton) {
        updateButton.addEventListener('click', function() {
            const ID = this.getAttribute('id');
            if (confirm('Are you sure you want to accept this request?')) {
              window.location.href = `Event_requests.php?accept_participation_request=true&ID=${ID}`;
            } else {
                return false;
            }
        });
    });
});


//  function redirectToPage(email) {
//   window.location.href = 'Events.php?id=' + email;
// }

 </script>
 