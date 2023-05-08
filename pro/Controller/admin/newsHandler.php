<?php

require_once "../../Controller/database.php";

$db = new database;
 $news_post = new News;
 $handler =new Newshandler();

if(isset($_POST["title"])&& isset($_POST["content"]))
{
  if(!empty($_POST["title"])&& !empty($_POST["content"]))
    {
      $handler->add_news($news_post);
    }
  } 

  if(isset($_GET["delete"]))  
  {
    $handler->deletenews();


  }

  if(isset($_POST["update"]))  
  {  
       
  
  $handler->updatenews();
  
  }







class Newshandler{
   


    public function add_news(News $news_post){
       

        if(isset($_POST["add"])){
          $db =new database();

          $news_post->setTitle($_POST["title"]);
          $news_post->setContent($_POST["content"]);
          $news_post->setCreatedAt("");
                $insert_data = array(  
                   "ID"=>'',
                   "Title"=>mysqli_real_escape_string($db->con, $news_post->getTitle()),
                    "Content"=>mysqli_real_escape_string($db->con, $news_post->getContent()),
                   "CreatedAt"=>mysqli_real_escape_string($db->con,$news_post->getCreatedAt()));
                    

                   if($db->insert('faculty_news_posts',$insert_data))  
                     {  
                          
                     }
                    else {
                        echo 'data Not  inserted';
                    }

                   
                  }

                }

                public function searchandselect()
                {
                      $db = new database;
        
                      
        
        
                      if(isset($_GET['search']))
                      {
                      
                            $values = $_GET['search'];
                         
                          $query= "SELECT * FROM faculty_news_posts WHERE CONCAT(Title,Content)
                            LIKE '%$values%'";
                            $query_run = mysqli_query($db->con,$query);
                          
                            if(mysqli_num_rows($query_run)> 0)
                            {
                              foreach($query_run as $s)
                              {
                      
                                
                                    echo '<tr>';
                                    echo '<td>' . $s["ID"] . '</td>';
                                    echo '<td>' . $s["Title"] . '</td>';
                                    echo '<td>' . $s["Content"] . '</td>';
                                     echo '<td>' . $s["CreatedAt"] . '</td>';
                                    
                                   
                                    
                                    echo '<td>';
                                    echo '<button class="action-button"><a href="edit2.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                                    echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                                    echo '</td>';
                                    echo '</tr>';
                              }
                             }
        
        
                      
                      
                      
                             else
                             {
                                    echo '<tr>';
                                    echo '<td colspan="4">No Record found</td>';
                                    echo '</tr>';
        
                             }
        
        
                    
                      
                      
                }
                else
              {
               
               $select = $db->select('faculty_news_posts');
        
                      
        
                      foreach($select as $s){
        
                             echo '<tr>';
                             echo '<td>' . $s["ID"] . '</td>';
                             echo '<td>' . $s["Title"] . '</td>';
                             echo '<td>' . $s["Content"] . '</td>';
                              echo '<td>' . $s["CreatedAt"] . '</td>';
                           
                            
                             
                             echo '<td>';
                             echo '<button class="action-button"><a href="edit2.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                             echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                             echo '</td>';
                             echo '</tr>';
        
        
        
                      }
              }
        
                }

                public function deletenews()
                {
                  $db = new database;
                  $where = array('ID'=>$_GET["ID"]);  

                  $db->delete("faculty_news_posts", $where);



                }
        






                // public function selectdeleteupdate()
                // {
                //       $db = new database;
                //       $select = $db->select('faculty_news_posts');
        
                //       foreach($select as $s){
        
                //              echo '<tr>';
                //              echo '<td>' . $s["ID"] . '</td>';
                //              echo '<td>' . $s["Title"] . '</td>';
                //              echo '<td>' . $s["Content"] . '</td>';
                //              echo '<td>' . $s["CreatedAt"] . '</td>';
                //              echo '<td>';
                //              echo '<button class="action-button"><a href="edit.php?edit=1&Title=' . $s["Title"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                //              echo '<button class="action-button"><a href="#" id="' . $s["Title"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                //              echo '</td>';
                //              echo '</tr>';
        
        
        
                //       }
        
        
        
        
        
                      
                // }
   
     
      public function updatenews()
      {

        $db = new database;
        $id = $_GET['ID'];
                 $update_data = array(  
                  
                  
                  'Title'=>mysqli_real_escape_string($db->con, htmlspecialchars($_POST['title'])),
                  'Content'=>mysqli_real_escape_string($db->con,htmlspecialchars($_POST['content']))
                  
                
                );  
                
                $where_condition = array(
                  'ID' => $id
              );
            if($db->update("faculty_news_posts", $update_data, $where_condition))
            {
        
             
        
            }


      }
      public function selectrow() {
        $db = new database;
        

        $id =  $_GET['ID'];

        $where_condition = array(
          'ID' => $id
        );
        $select = $db->select_where('faculty_news_posts', $where_condition);
        
        foreach ($select as $s) {
          echo '<div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="title" placeholder="Title..." value="' . $s['Title'] . '" required="">
                  </fieldset>
                </div>
              
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="content" placeholder="Content...">' . htmlspecialchars($s['Content']) . '</textarea>
                  </fieldset>
                </div>';
        }






      }



  }              
                    

/*





 //get id staff
          $Name=$_SESSION['name'];
          $where_condition =array("FirstName"=>$Name);      
          $res = $db->select_where('staff',$where_condition);
          $id_staff= $res[0]["ID"];
          echo $id_staff . "  ";

            // get id post 
          $where_condition =array("Title"=>$news_post->getTitle());      
          $res = $db->select_where('faculty_news_posts',$where_condition);
          $id_news= $res[0]["ID"];
          echo $id_news;
                    //insert data to staff_job post 
                    $staff_new=array("staff_id"=>$id_staff ,"news_id" => $id_news);
                    if($db->insert('staff_news',$staff_new))  
                     {  
                          
                     }
                    else {
                        echo 'data Not  inserted';
                    }

                  */  



                
                  // echo"done";
         
    
          
                    
        
       

    

?>

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