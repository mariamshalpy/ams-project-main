<?php
require_once("../../Controller/database.php");

class messoop{


public function getevents(){ 
    $db = new database; 
    $where=array('Email'=>$_SESSION['name'].'@gmail.com');
    $post_data = $db->select_where('event_request',$where); 
        foreach($post_data as $post) { 
          echo '<tr>'; 
          
          echo '<td>' . $post["Email"] . '</td>'; 
          echo '<td>' . $post["Type"] . '</td>'; 
          
          echo '<td>' . $post["Description"] . '</td>'; 
          echo '<td>' . $post["name"] . '</td>'; 
          echo '<td>' . $post["status"] . '</td>'; 
          echo '</tr>'; 
       
        } 
       
}
}
?>