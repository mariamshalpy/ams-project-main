
<?php
     
require_once 'header.php';
require_once '../../Controller/admin/jobpostshandler.php';

// $db = new database;

// $new_job_post_handler = new JobPostHandler;
// $new_job_post =new JobPosts;
// if (isset($_POST['CompanyName']) && isset($_POST['Title']) && isset($_POST['JobDescription'])) {
//   if (!empty($_POST['CompanyName']) && !empty($_POST['Title']) && !empty($_POST['JobDescription'])) {
//     $new_job_post->setCompanyName($_POST['CompanyName']);
//     $new_job_post->setTitle($_POST['Title']);
//     $new_job_post->setJobDescription($_POST['JobDescription']);
//     $date = date('Y-m-d');
//     $new_job_post->setCreatedAt($date);
//     $new_job_post_handler->addpost($new_job_post);
//   } else{
//   {
//       $errMsg = "Please fill all fields";
//   }
// }
// }

// if(isset($_GET["delete"]))  
// {  
//      $where = array('ID'=>$_GET["ID"]);  
//      if($db->delete("job_posts", $where))  
//      {  
           
//      }  
// }  

// if(isset($_GET["deleted"]))  
// {  
//      $success_message = 'data deleted';  
// }  


// if(isset($_POST["edit"]))  
// {  
//      $update_data = array(  
//           'CompanyName'=>mysqli_real_escape_string($db->con, $_POST['CompanyName']),  
//           'Title'=>mysqli_real_escape_string($db->con, $_POST['Title']),
//           'JobDescription'=>mysqli_real_escape_string($db->con,$_POST['JobDescription']));  
//      $where_condition = array('CompanyName'=>$_POST["companyName"]);  
//      if($data->update("job_posts", $update_data, $where_condition))  
//      {  
//           header("location:job_posts.php?updated=1");  
//      }  

//     }
//     if(isset($_GET["updated"]))  
//     {  
//          $success_message = 'data updated';  
//     } 


    





    

  
    
    
    





?>

<style>
.search-bar {
  position: relative;
  display: inline-block;
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 10px;
}

.search-input {
  border: none;
  background-color: transparent;
  outline: none;
  font-size: 16px;
  padding: 0 10px;
  width: 80%;
}

.search-button {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  border: none;
  background-color: transparent;
  outline: none;
  cursor: pointer;
}

.search-button i {
  font-size: 16px;
  color: #999;
}

</style>




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
            <h6>Manage Job Posts</h6>
            <h2>Great companies are built on great products and great people.</h2>
            <p>When managing job posts, it's important to remember that the quality of your team is just as important as the quality of your product or service. By attracting and hiring great people
                , you can build a strong and effective team that can help drive your company's success. </p>
           
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="job_posts.php" method="post">
              <div class="row">
                <div class="col-lg-12">
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="CompanyName" placeholder="CompanyName..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="Title"   placeholder="Title..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="JobDescription"  placeholder="JobDescription..."></textarea>
                  </fieldset>
                </div>
                <!-- <div class="col-lg-12">
                  <fieldset>
                  <input type="date" id="myDate" name="myDate">
                  </fieldset>
                </div> -->
                
              
                <div class="col-lg-12">
                  <fieldset>
                    <button  type="submit" name ="add" id="form-submit" class="orange-button">add post</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




 




<form action="" method="get">
  <div class="search-bar">
    <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}   ?>" class="search-input" placeholder="Search...">
    <button class="search-button" type="submit">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>


  
    
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
       

        $new_job_post_handler->searchandselect();
        ?>
        
        
     
    </tbody>
  </table>
  </div>
</body>

 

<?php require_once 'footer.php'; ?> 
</body>
</html>

<script>  
//  $(document).ready(function(){  
//       $('.delete').click(function(){  
//            var ID = $(this).attr("id");  
//            if(confirm("Are you sure you want to delete this post?"))  
//            {  
//                 window.location = "job_posts.php?delete=1&ID="+ID+"";  
//            }  
//            else  
//            {  
//                 return false;  
//            }  
//       });  
//  });  


//  $(document).ready(function(){  
//       $('.edit').click(function(){  
//            var ID = $(this).attr("id");  
             
           
//                 window.location = "edit.php?edit=1&ID="+ID+"";  
           
           
//       });  
//  });  




 
 </script>