<?php
require_once "database.php";

 class AlumniHandler{
        
 
         public function add_alumni(Alumni $new_alumni){
                $db = new database;
                if(isset($_POST["add"]))  
                {
                    
    
                    $insert_data = array(  
                            'ID'=>'',  
                            'FirstName'=>mysqli_real_escape_string($db->con, $new_alumni->get_first_name()),
                            'LastName'=>mysqli_real_escape_string($db->con, $new_alumni->get_last_name()),
                            'Email' =>mysqli_real_escape_string($db->con, $new_alumni->get_email()),
                            'Address' =>mysqli_real_escape_string($db->con, $new_alumni->get_address()),
                            'BirthDate' =>mysqli_real_escape_string($db->con, $new_alumni->get_birth_date()),
                            'Password'=>mysqli_real_escape_string($db->con, $new_alumni->get_password()),  
                            'PhoneNumber'=>mysqli_real_escape_string($db->con, $new_alumni->get_phone()),  
                            'JobTitle'=>mysqli_real_escape_string($db->con, $new_alumni->get_jobTitle()));  
                       if($db->insert('alumni', $insert_data))  
                       {  
                        
                       }
                       else 
                       {
                        echo " insNoterted";

                       }
    

                } 
                     
         }
        

        
         


 }

?>