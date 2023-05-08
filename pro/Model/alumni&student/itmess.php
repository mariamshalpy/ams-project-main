<?php
require_once("../../Controller/database.php");
class itmess{

    

    public function getmess()
    {
        $db = new database; 
        $where=array('role'=>'itsupport','email_to'=>$_SESSION['name'].'@gmail.com');
        $post_data = $db->select_where('it_support_email',$where);
            foreach($post_data as $post) { 
              echo '<tr>'; 
              
              echo '<td>' . $post["email_from"] . '</td>'; 
              echo '<td>' . $post["email_to"] . '</td>'; 
              
              echo '<td>' . $post["content"] . '</td>'; 
              echo '<td>' . $post["role"] . '</td>'; 
             
              echo '</tr>'; 
           
            }
    }
}


?>