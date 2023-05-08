<?php
 require_once 'header.php';
 require_once '../../Controller/database.php';
 require_once '../../Controller/admin/mentorshipRequestHandler.php';

 $db = new database;
 $new_Mentorship_handler = new MentorshipRequestHandler;

 

 
 if(isset($_GET["delete"]))  
{  
     $where = array('Email'=>$_GET["Email"]);  
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
  $Email = $_GET["Email"];
  $new_Mentorship_handler->accept_participation_request($Email); 
}
 if(isset($_GET["accept_planing_request"])) {
   $Email = $_GET["Email"];
   
  

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
                    <th>Mentorship_name</th>
                    <th>status</th>
                    <th>option</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $new_Mentorship_handler->getAllParticipateRequests();
                ?>
                </tbody>
                </table>
              </div>
              <div class="container search-container">
              </div>
     
              <div class="container">
                <h4>Technical course requests</h4>
                <table>
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>date</th>
                    <th>Description</th>
                    <th>status</th>
                    <th>option</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $new_Mentorship_handler->getAllPlanTechnicalCourseRequests();
                ?>
                </tbody>
                </table>
              </div>
              <div class="container">
                <h4>Careerbuild requests</h4>
                <table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>date</th>
                    <th>Description</th>
                    <th>status</th>
                    <th>option</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $new_Mentorship_handler->getAllPlanCareerbuildRequests();
                ?>
                </tbody>
                </table>
              </div>
</body>



 

<?php require_once 'footer.php'; ?> 
</body>
</html>
<script>  
 $(document).ready(function(){  
      $('.delete').click(function(){  
           var Email = $(this).attr("id");  
           if(confirm("Are you sure you want to decline this request?"))  
           {  
                window.location = "mentorship_requests.php?delete=1&Email="+Email+"";  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });
 
 document.addEventListener('DOMContentLoaded', function() {
    const updateButtons = document.querySelectorAll('.accept_participation_request');
    updateButtons.forEach(function(updateButton) {
        updateButton.addEventListener('click', function() {
            const Email = this.getAttribute('id');
            if (confirm('Are you sure you want to accept this request?')) {
              window.location.href = `mentorship_requests.php?accept_participation_request=true&Email=${Email}`;
            } else {
                return false;
            }
        });
    });
});

  document.addEventListener('DOMContentLoaded', function() {
     const updateButtons = document.querySelectorAll('.accept_planing_request');
     updateButtons.forEach(function(updateButton) {
         updateButton.addEventListener('click', function() {
             const Email = this.getAttribute('id');
             if (confirm('Are you sure you want to accept this request?')) {
               window.location.href = `Event_requests.php?accept_planing_request=true&Email=${Email}`;
             } else {
                 return false;
             }
         });
     });
 });
 </script>
 