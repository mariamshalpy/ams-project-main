<?php 
require_once 'header.php';
require_once "../../Model/staff/News_post.php";
require_once "../../Controller/staff/newsHandler.php";



/**
 * 1 => get data                 
 * 2 => create new object from news class
 * 3 => set data in objct
 * 4 => create handler object 
 * 5 => send object to method addnews($new_news) 
 * 
 */


 $news_post = new News();
 $handler =new Newshandler();



         
                    if(isset($_POST["title"])&& isset($_POST["content"]))
                      {
                        $handler->add_news($news_post);
                       
                        }
                     
                

?>
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
                      <label class="label_form" class="label_form">Tittle:</label>
                      <input type="text" name="title"    required="" >
                      </fieldset>
                  </div>

                  <!--Content-->
                  <div class="col-lg-12">
                    <fieldset>
                    <label class="label_form" class="label_form">Content:</label>
                      <textarea name="content"   required=""></textarea>
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
<br>

          
     
  <!----End form -->

   


                        <!--search
              <div class="container search-container">
                <input type="text" id="search-text" name="q" placeholder="search here">
                <i class="fas fa-search search-icon"></i>
              </div>
              -->
                        <!--table-->
  
        <div class="container">
        <table>
          <!--head table-->
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th>created At</th>
              <th>Remove</th>
            </tr>
          </thead>
          <!--End head table -->

          <!--body table-->
          <tbody>
            <?php
             $handler->get_all_data();
            ?>
            
          </tbody>
        </table>
        </div>


      <?php require_once 'footer.php'; ?> 
      </body>
      </html>