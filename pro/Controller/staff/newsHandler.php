<?php

require_once "database.php";


$handler =new Newshandler();

   
   if(isset($_GET["delete"])){
    $handler->delete_news();
   }                  
        



class Newshandler{
   


    public function add_news(News $news_post){
       

        if(isset($_POST["add"])){
          if(!empty($_POST["title"])&& !empty($_POST["content"]))
          {
            $news_post->set_title(htmlspecialchars($_POST["title"]));
            $news_post->set_content(htmlspecialchars($_POST["content"]));
            $news_post->set_createdAt();
          }
          $db =new database();

                $insert_data = array(  
                   "ID"=>'',
                   "Title"=>mysqli_real_escape_string($db->con, $news_post->get_title()),
                    "Content"=>mysqli_real_escape_string($db->con, $news_post->get_content()),
                   "CreatedAt"=>mysqli_real_escape_string($db->con,$news_post->get_createdAt()));
                    

                   if($db->insert('faculty_news_posts',$insert_data))  
                     {  
                          
                     }
                    else {
                        echo 'data Not  inserted';
                    }

                   
                  }

                }
                

                
              


        public function get_all_data() {
          $db = new database();
          $data = $db->select("faculty_news_posts");
          foreach ($data as $news_post) {
            echo "<tr>";
            echo "<td>".$news_post["ID"]."</td>";
            echo "<td>".$news_post["Title"]."</td>";
            echo "<td>".$news_post["Content"]."</td>";
            echo "<td>".$news_post["CreatedAt"]."</td>";
            echo "<td>";
            echo '<button class="action-button"><a href="#" id="' . $news_post["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
            echo "</td>";
            echo "</tr>";
          }
        }
        
        public function delete_news() {
          //if(isset($_GET["delete_news"])){
          $db = new database();
          $where = array("ID" => $_GET["ID"]);
          $db->delete("faculty_news_posts", $where);
        // }
        }
      } 
        ?>
        
        <!-- <script>
        $(document).ready(function() {  
          $(".delete_news").on("click", function() {
          
            var ID = $(this).attr("id");  
            if (confirm("Are you sure you want to delete this news post?")) {  
              window.location.href = "faculty_news.php?delete=1&ID="+ID+"";  
            }  
          });  
        });
        </script> -->


<script>
 $(document).ready(function(){
      $('.delete').click(function(){
           var ID = $(this).attr("id");
           if(confirm("Are you sure you want to delete this post?"))
           {
                window.location = "faculty_news.php?delete=1&ID="+ID+"";
           }
           else
           {
                return false;
           }
      });
 });
</script>