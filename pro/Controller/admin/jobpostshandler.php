<?php



require_once '../../Model/jobposts.php';
require_once '../../Controller/database.php';
$new_job_post_handler = new JobPostHandler;
if (isset($_POST['CompanyName']) && isset($_POST['Title']) && isset($_POST['JobDescription'])) {
       if (!empty($_POST['CompanyName']) && !empty($_POST['Title']) && !empty($_POST['JobDescription'])) {

            
              $posts= new JobPosts;

              $new_job_post_handler->addpost($posts);

       }
}


if(isset($_GET["delete"]))  
{  
      $new_job_post_handler->deletepost();
}  


if(isset($_POST["update"]))  
{  
     

$new_job_post_handler->updatepost();

}





// $db = new database;
 class JobPostHandler {
        public $success_message = '';
         public function addpost(JobPosts $new_job_post){
                $db = new database;
                
                if(isset($_POST["add"]))  
                {
                 
                     $new_job_post->setCompanyName($_POST['CompanyName']);
                     $new_job_post->setTitle($_POST['Title']);
                     $new_job_post->setJobDescription($_POST['JobDescription']);
                     $date = date('Y-m-d');
                     $new_job_post->setCreatedAt($date);
                        

    
                    $insert_data = array(  
                            'ID'=>'',  
                            'CompanyName'=>mysqli_real_escape_string($db->con, $new_job_post->getCompanyName()),
                            'CreatedAt'=>mysqli_real_escape_string($db->con, $new_job_post->getCreatedAt()),
                            'JobDescription'=>mysqli_real_escape_string($db->con,$new_job_post->getJobDescription() ),
                            'Title' =>mysqli_real_escape_string($db->con, $new_job_post->getTitle()));  
                       if($db->insert('job_posts', $insert_data))  
                       {  
                        //     $success_message = 'data inserted';  
                       }
                }
                

                
       
    
}

public function deletepost()
{      
        $db = new database;
      

       

            $where = array('ID'=>$_GET["ID"]);  
            $db->delete("job_posts", $where);
       

}






//  public function select()
//         {
//               $db = new database;






              
//               $select = $db->select('job_posts');

              

//               foreach($select as $s){

//                      echo '<tr>';
//                      echo '<td>' . $s["ID"] . '</td>';
//                      echo '<td>' . $s["CompanyName"] . '</td>';
//                      echo '<td>' . $s["Title"] . '</td>';
//                       echo '<td>' . $s["JobDescription"] . '</td>';
//                      echo '<td>' . $s["CreatedAt"] . '</td>';
                    
                     
//                      echo '<td>';
//                      echo '<button class="action-button"><a href="edit.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
//                      echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
//                      echo '</td>';
//                      echo '</tr>';



//               }



            
              
              
//         }


        public function searchandselect()
        {
              $db = new database;

              


              if(isset($_GET['search']))
              {
              
                    $values = $_GET['search'];
                 
                  $query= "SELECT * FROM job_posts WHERE CONCAT(CompanyName,Title,JobDescription)
                    LIKE '%$values%'";
                    $query_run = mysqli_query($db->con,$query);
                  
                    if(mysqli_num_rows($query_run)> 0)
                    {
                      foreach($query_run as $s)
                      {
              
                        
                            echo '<tr>';
                            echo '<td>' . $s["ID"] . '</td>';
                            echo '<td>' . $s["CompanyName"] . '</td>';
                            echo '<td>' . $s["Title"] . '</td>';
                             echo '<td>' . $s["JobDescription"] . '</td>';
                            echo '<td>' . $s["CreatedAt"] . '</td>';
                           
                            
                            echo '<td>';
                            echo '<button class="action-button"><a href="edit.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                            echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                            echo '</td>';
                            echo '</tr>';
                      }
                     }


              
              
              
                     else
                     {
                            echo '<tr>';
                            echo '<td colspan="5">No Record found</td>';
                            echo '</tr>';

                     }


            
              
              
        }
        else
      {
       
       $select = $db->select('job_posts');

              

              foreach($select as $s){

                     echo '<tr>';
                     echo '<td>' . $s["ID"] . '</td>';
                     echo '<td>' . $s["CompanyName"] . '</td>';
                     echo '<td>' . $s["Title"] . '</td>';
                      echo '<td>' . $s["JobDescription"] . '</td>';
                     echo '<td>' . $s["CreatedAt"] . '</td>';
                    
                     
                     echo '<td>';
                     echo '<button class="action-button"><a href="edit.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                     echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                     echo '</td>';
                     echo '</tr>';



              }
      }

        }






        public function updatepost(){
        $db = new database;
$id = $_GET['ID'];
         $update_data = array(  
          
          'CompanyName'=>mysqli_real_escape_string($db->con, htmlspecialchars($_POST['CompanyName'])),  
          'Title'=>mysqli_real_escape_string($db->con, htmlspecialchars($_POST['Title'])),
          'JobDescription'=>mysqli_real_escape_string($db->con,htmlspecialchars($_POST['JobDescription']))
          
        
        );  
        
        $where_condition = array(
          'ID' => $id
      );
    if($db->update("job_posts", $update_data, $where_condition))
    {

     

    }
      

        }

        public function selectrow() {
          $db = new database;
          

          $id =  $_GET['ID'];

          $where_condition = array(
            'ID' => $id
          );
          $select = $db->select_where('job_posts', $where_condition);
          
          foreach ($select as $s) {
            echo '<div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="CompanyName" placeholder="CompanyName..." value="' . $s['CompanyName'] . '" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="Title" placeholder="Title..." value="' . $s['Title'] . '" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="JobDescription" placeholder="JobDescription...">' . htmlspecialchars($s['JobDescription']) . '</textarea>
                    </fieldset>
                  </div>';
          }






        }
        

        
 }


 

 










?>
<script>  
 $(document).ready(function(){  
      $('.delete').click(function(){  
           var ID = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this post?"))  
           {  
                window.location = "job_posts.php?delete=1&ID="+ID+"";  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  
</script>