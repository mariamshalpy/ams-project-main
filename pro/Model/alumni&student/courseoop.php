<?php
require_once("../../Controller/database.php");

class courseoop{



    public function getcourse(){ 
        $db = new database; 
        $where=array('Email'=>$_SESSION['name'].'@gmail.com');
        $post_data = $db->select_where('requesttomentorship',$where); 
            foreach($post_data as $post) { 
              echo '<tr>'; 
              
              echo '<td>' . $post["Email"] . '</td>'; 
              echo '<td>' . $post["Type"] . '</td>'; 
              
              echo '<td>' . $post["Description"] . '</td>'; 
              echo '<td>' . $post["Name"] . '</td>'; 
              echo '<td>' . $post["status"] . '</td>'; 
              echo '</tr>'; 
           
            } }

          }



?>