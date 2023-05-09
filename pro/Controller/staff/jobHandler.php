<?php

require_once "database.php";


$handler =new Jobhandler();

   
   if(isset($_GET["delete"])){
    $handler->delete_news();
   }                  
        
class Jobhandler{

    public function add_jobs(Job $job_post){


        
        $db =new database();

        if(isset($_POST["add"])){

            $data = array(
            "Title" =>mysqli_real_escape_string($db->con, $job_post->get_title()),
            "JobDescription"=>mysqli_real_escape_string($db->con,$job_post->get_job_description()) ,
            "CompanyName" =>mysqli_real_escape_string($db->con,$job_post->get_companyName()),
            "CreatedAt"=>mysqli_real_escape_string($db->con,$job_post->get_createdAt()));
 
            if($db->insert('job_posts',$data))  
                {   
                }
            else {
                echo 'data Not  inserted';
            }
        }
 
    
}


public function get_all_data(){
    $db =new database();
    $data = $db->select("job_posts");
    foreach($data as $job_post){
      echo "<tr>";
      echo "<td>".$job_post["ID"]."</td>";
      echo "<td>".$job_post["CompanyName"]."</td>";
      echo "<td>".$job_post["Title"]."</td>";
      echo "<td>".$job_post["JobDescription"]."</td>";
      echo "<td>".$job_post["CreatedAt"]."</td>";
      echo "<td>";
      echo '<button class="action-button"><a href="#" id="' . $job_post["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
      echo "</td>";
      echo "</tr>";
    }
  }
  
  public function delete_news() {
    //if(isset($_GET["delete_news"])){
    $db = new database();
    $where = array("ID" => $_GET["ID"]);
    $db->delete("job_posts", $where);
  // }
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