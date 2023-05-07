<?php
require_once("../../Controller/database.php");

class commoop
{

    public function comm()
   
{
    $db=new database;
  $where=array('email_to'=>$_SESSION['name'].'@gmail.com');
        $post_data = $db->select_where('communication',$where);
            foreach($post_data as $post) { 
              echo '<tr>'; 
              
              echo '<td>' . $post["email_from"] . '</td>'; 
              echo '<td>' . $post["content"] . '</td>'; 
              
              echo '<td>' . $post["role"] . '</td>'; 
              
              echo '</tr>'; 
 
}
}
}

?>