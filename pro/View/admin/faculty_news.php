<?php 
require_once 'header.php';
require_once "../../Model/News.php";
require_once '../../Controller/admin/newshandler.php';



/**
 * 1 => get data                 
 * 2 => create new object from news class
 * 3 => set data in objct
 * 4 => create handler object 
 * 5 => send object to method addnews($new_news) 
 * 
 */

// $db = new database;
//  $news_post = new News;
//  $handler =new Newshandler();



         
                    // if(isset($_POST["title"])&& isset($_POST["content"]))
                    //   {
                    //     if(!empty($_POST["title"])&& !empty($_POST["content"]))
                    //       {
                    //         $news_post->setTitle($_POST["title"]);
                    //         $news_post->setContent($_POST["content"]);
                    //         $news_post->setCreatedAt("");
                    //       }
                    //     } 
                    // $handler->add_news($news_post);


//                     if(isset($_GET["delete"]))  
// {  
//      $where = array('Title'=>$_GET["title"]);  
//      if($db->delete("faculty_news_posts", $where))  
//      {  
//           // header("location:manage_accounts.php?deleted=1");  
//      }  
// }  

// if(isset($_GET["deleted"]))  
// {  
//      $success_message = 'data deleted';  
// }  
        

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



        <!----form --->
  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">

              <div class="col-lg-6  align-self-center">
                <div class="section-heading">
                  <h6>Manage faculty news</h6>
                  <h2>Effective communication is 20% what you know and 80% how you feel about what you know.</h2>
                  <p>In managing faculty news, it's important to not only convey the information but also the enthusiasm and 
                    importance of the news to the faculty members. 
                    Effective communication can help ensure that the faculty members are engaged and motivated to act upon the news.</p>
                </div>
              </div>

        <div class="col-lg-6">
          <div class="contact-us-content">
                                       
            <form id="contact-form" action="faculty_news.php" method="post">  

                  <!--Title-->
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="title"   placeholder="Title..." required="" >
                    </fieldset>
                  </div>

                  <!--Content-->
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="content"   placeholder="Content..."></textarea>
                    </fieldset>
                  </div>

                  <!--button Add-->
                  <div class="col-lg-12">
                   <fieldset>
                     <button type="submit" name="add" value="add" class="orange-button">add News</button>
                    </fieldset>
                 </div>

            </form>
           
          </div>
        </div>

      </div>
    </div>
  </div>
  <!----End form -->

    <br>
    <br>
    <br>


                        <!--search
              <div class="container search-container">
                <input type="text" id="search-text" name="q" placeholder="search here">
                <i class="fas fa-search search-icon"></i>
              </div>
              -->
                        <!--table-->

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
          <!--head table-->
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Content</th>
              <th>createdAt</th>
              <th>Action</th>
            </tr>
          </thead>
          <!--End head table -->

          

          <!--body table-->
          <tbody>

            <?php
            $handler->searchandselect();
            ?>
            
          </tbody>
        </table>
        </div>


      <?php require_once 'footer.php'; ?> 
      </body>
      </html>


      <script>  
//  $(document).ready(function(){  
//       $('.delete').click(function(){  
//            var title = $(this).attr("id");  
//            if(confirm("Are you sure you want to delete this post?"))  
//            {  
//                 window.location = "faculty_news.php?delete=1&title="+title+"";  
//            }  
//            else  
//            {  
//                 return false;  
//            }  
//       });  
//  });  


//  $(document).ready(function(){  
//       $('.edit').click(function(){  
//            var companyName = $(this).attr("id");  
             
           
//                 window.location = "edit.php?edit=1&companyName="+companyName+"";  
           
           
//       });  
//  });  




 
 </script>