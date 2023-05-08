<?php

require_once '../../Controller/database.php';
 if(isset($_GET["delete"]))  
 {
    $faqHandler = new FaqHandler;
    $faqHandler->deleteQuestion();  
        
 }  
 if(isset($_GET["deleted"]))  
 {  
      $success_message = 'data deleted';  
 }  
class FaqHandler{



     

     public function getAllFaq(){
          $db = new database;
          $post_data = $db->select('faq');
  foreach($post_data as $post) {  
    echo '<tr>';  
    echo '<td>' . $post["Questions"] . '</td>';  
    echo '<td>' . $post["Answers"] . '</td>';  
    echo '<td>' . $post["AdminId"] . '</td>';  
    echo '<td><button class="action-button"><a href="#" id="' . $post["Questions"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button></td>';  
    echo '</tr>';  
  }  
    }

     public function deleteQuestion(){
        $db =new database;
         $where = array('Questions'=>$_GET["id"]);  
       if($db->delete("faq", $where))  
       {  
            //header("location:mange_faq.php?deleted=1");  
       }
     }

    


}


?>
<script>  
 $(document).ready(function(){  
      $('.delete').click(function(){  
           var question = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this post?"))  
           {  
                window.location = "mange_faq.php?delete=1&id="+question+"";  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  
 </script> 