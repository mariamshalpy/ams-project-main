<?php

require_once '../../Controller/database.php';
require_once '../../Model/staff.php';
require_once '../../Model/admin.php';
require_once '../../Model/alumni.php';
require_once '../../Model/student.php';
require_once '../../Model/support.php';

$account_handler = new AccountHandler;

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['bdate']) && isset($_POST['password']) && isset($_POST['phonenumber']) && isset($_POST['jobtitle']) && isset($_POST['role'])) {
       if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['bdate']) && !empty($_POST['password']) && !empty($_POST['phonenumber']) && !empty($_POST['jobtitle'])&& !empty($_POST['role'])) {
               $role = $_POST['role'];
               if( $role == 'admin') {
                  $account_handler->addAdmin();
               }
               if( $role == 'student') {
                 $account_handler->addStudent();
               }
               if( $role == 'alumni') {
                 $account_handler->addAlumni();
               }
               if( $role == 'staff') {
                 $account_handler->addStaff();
               }
               if( $role == 'support') {
                 $account_handler->addSupport();
               }
       } else {
           $errMsg = "Please fill all fields";
       }
     }
     
     if(isset($_GET["delete_admin"]))  
     {  
       $account_handler->deleteAdmin(); 
     }    
     if(isset($_GET["delete_alumni"]))  
     {  
       $account_handler->deleteAlumni(); 
     }    
     if(isset($_GET["delete_student"]))  
     {  
       $account_handler->deleteStudent(); 
     }    
     if(isset($_GET["delete_support"]))  
     {  
       $account_handler->deleteSupport(); 
     }    
     if(isset($_GET["delete_staff"]))  
     {  
       $account_handler->deleteStaff(); 
     }    
     




 class AccountHandler{
        public $success_message = '';
         public function addAdmin(){
             
            $db = new database;
            if(isset($_POST["add"]))  
            {
                  $new_admin = new Admin;   
                  $new_admin->setFirstName($_POST['firstname']);
                  $new_admin->setLastName($_POST['lastname']);
                  $new_admin->setEmail($_POST['email']);
                  $new_admin->setPassword($_POST['password']);

                $insert_data = array(  
                        'ID'=>'',  
                        'FirstName'=>mysqli_real_escape_string($db->con, $new_admin->getFirstName()),
                        'LastName'=>mysqli_real_escape_string($db->con, $new_admin->getLastName()),
                        'Email' =>mysqli_real_escape_string($db->con, $new_admin->getEmail()),
                        'Password'=>mysqli_real_escape_string($db->con, $new_admin->getPassword()));  
                   if($db->insert('admin', $insert_data))  
                   {  
                        $success_message = 'data inserted';  
                   }
            }

        
    }
         public function addStudent(){
                $db = new database;
                if(isset($_POST["add"]))  
                {
                     $new_student = new Student;
                     $new_student->setFirstName($_POST['firstname']);
                     $new_student->setLastName($_POST['lastname']) ;
                     $new_student->setEmail($_POST['email']);
                     $new_student->setAddress($_POST['address']);
                     $new_student->setBirthDate($_POST['bdate']);
                     $new_student->setPassword($_POST['password']);
                     $new_student->setPhoneNumber($_POST['phonenumber']);
                     $new_student->setJobTitle($_POST['jobtitle']);
                    $insert_data = array(  
                            'ID'=>'',  
                            'FirstName'=>mysqli_real_escape_string($db->con, $new_student->getFirstName()),
                            'LastName'=>mysqli_real_escape_string($db->con, $new_student->getLastName()),
                            'Email' =>mysqli_real_escape_string($db->con, $new_student->getEmail()),
                            'Address' =>mysqli_real_escape_string($db->con, $new_student->getAddress()),
                            'BirthDate' =>mysqli_real_escape_string($db->con, $new_student->getBirthDate()),
                            'Password'=>mysqli_real_escape_string($db->con, $new_student->getPassword()),  
                            'PhoneNumber'=>mysqli_real_escape_string($db->con, $new_student->getPassword()),  
                            'JobTitle'=>mysqli_real_escape_string($db->con, $new_student->getJobTitle()));  
                       if($db->insert('student', $insert_data))  
                       {  
                                 $success_message = 'data inserted';
                       }
    

                }        
         }
         public function addAlumni(){
                $db = new database;
                if(isset($_POST["add"]))  
                {
                     $new_alumni = new Alumni;

                     $new_alumni->FirstName = $_POST['firstname'];
                     $new_alumni->LastName = $_POST['lastname'];
                     $new_alumni->Email = $_POST['email'];
                     $new_alumni->Address = $_POST['address'];
                     $new_alumni->BirthDate = $_POST['bdate'];
                     $new_alumni->Password = $_POST['password'];
                     $new_alumni->PhoneNumber = $_POST['phonenumber'];
                     $new_alumni->JobTitle = $_POST['jobtitle'];
    
                    $insert_data = array(  
                            'ID'=>'',  
                            'FirstName'=>mysqli_real_escape_string($db->con, $new_alumni->FirstName),
                            'LastName'=>mysqli_real_escape_string($db->con, $new_alumni->LastName),
                            'Email' =>mysqli_real_escape_string($db->con, $new_alumni->Email),
                            'Address' =>mysqli_real_escape_string($db->con, $new_alumni->Address),
                            'BirthDate' =>mysqli_real_escape_string($db->con, $new_alumni->BirthDate),
                            'Password'=>mysqli_real_escape_string($db->con, $new_alumni->Password),  
                            'PhoneNumber'=>mysqli_real_escape_string($db->con, $new_alumni->PhoneNumber),  
                            'JobTitle'=>mysqli_real_escape_string($db->con, $new_alumni->JobTitle));  
                       if($db->insert('alumni', $insert_data))  
                       {  
                        $success_message = 'data inserted';
                       }
    

                }        
         }
         public function addSupport(){

                $db = new database;
                if(isset($_POST["add"]))  
                {
                     $new_support = new support;
                     $new_support->FirstName = $_POST['firstname'];
                     $new_support->LastName = $_POST['lastname'];
                     $new_support->Email = $_POST['email'];
                     $new_support->Address = $_POST['address'];
                     $new_support->BirthDate = $_POST['bdate'];
                     $new_support->Password = $_POST['password'];
                     $new_support->PhoneNumber = $_POST['phonenumber'];
    
                    $insert_data = array(  
                            'ID'=>'',  
                            'FirstName'=>mysqli_real_escape_string($db->con, $new_support->FirstName),
                            'LastName'=>mysqli_real_escape_string($db->con, $new_support->LastName),
                            'Email' =>mysqli_real_escape_string($db->con, $new_support->Email),
                            'Address' =>mysqli_real_escape_string($db->con, $new_support->Address),
                            'BirthDate' =>mysqli_real_escape_string($db->con, $new_support->BirthDate),
                            'Password'=>mysqli_real_escape_string($db->con, $new_support->Password),  
                            'PhoneNumber'=>mysqli_real_escape_string($db->con, $new_support->PhoneNumber),  
                            'JobTitle'=>mysqli_real_escape_string($db->con, $new_support->JobTitle));  
                       if($db->insert('support', $insert_data))  
                       {  
                        $success_message = 'data inserted';
                       }
    

                }        
         }
         public function addStaff(){
                $db = new database;
                if(isset($_POST["add"]))  
                {
                     $new_staff = new Staff;
                     $new_staff->setFirstName($_POST['firstname']);
                     $new_staff->setLastName($_POST['lastname']);
                     $new_staff->setEmail($_POST['email']) ;
                     $new_staff->setAddress($_POST['address']);
                     $new_staff->setBirthDate($_POST['bdate']);
                     $new_staff->setPassword($_POST['password']);
                     $new_staff->setPassword($_POST['phonenumber']);
    
                    $insert_data = array(  
                            'ID'=>'',  
                            'FirstName'=>mysqli_real_escape_string($db->con, $new_staff->getFirstName()),
                            'LastName'=>mysqli_real_escape_string($db->con, $new_staff->getLastName()),
                            'Email' =>mysqli_real_escape_string($db->con, $new_staff->getEmail()),
                            'Address' =>mysqli_real_escape_string($db->con, $new_staff->getAddress()),
                            'BirthDate' =>mysqli_real_escape_string($db->con, $new_staff->getBirthDate()),
                            'Password'=>mysqli_real_escape_string($db->con, $new_staff->getPassword()),  
                            'PhoneNumber'=>mysqli_real_escape_string($db->con, $new_staff->getPhoneNumber()));  
                       if($db->insert('staff', $insert_data))  
                       {  
                        $success_message = 'data inserted';
                       }
    

                }        
         }

         



         public function getAllAdmins(){
          $db = new database;
          $post_data = $db->select('admin');
              foreach($post_data as $post) {
                echo '<tr>';
                echo '<td>' . $post["ID"] . '</td>';
                echo '<td>' . $post["FirstName"] . '</td>';
                echo '<td>' . $post["LastName"] . '</td>';
                echo '<td>' . $post["Email"] . '</td>';
                echo '<td>' . $post["Password"] . '</td>';
                echo '<td>';
                echo '<button class="action-button"><a href="manage_accounts.php?edit=1&email=' . $post["Email"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                echo '<button class="action-button"><a href="#" id="' . $post["Email"] . '" class="delete_admin"><i class="fas fa-trash delete-icon"></i></a></button>';
                echo '</td>';
                echo '</tr>';
              }
            
      }


          public function searchForAdminandselect()
             {
              $db = new database;

              


              if(isset($_GET['admin_search']))
              {
              
                    $values = $_GET['admin_search'];
                 
                  $query= "SELECT * FROM admin WHERE CONCAT(FirstName,LastName,Email,Password)
                    LIKE '%$values%'";
                    $query_run = mysqli_query($db->con,$query);
                  
                    if(mysqli_num_rows($query_run)> 0)
                    {
                      foreach($query_run as $s)
                      {
              
                        
                            echo '<tr>';
                            echo '<td>' . $s["ID"] . '</td>';
                            echo '<td>' . $s["FirstName"] . '</td>';
                            echo '<td>' . $s["LastName"] . '</td>';
                             echo '<td>' . $s["Email"] . '</td>';
                            echo '<td>' . $s["Password"] . '</td>';
                           
                            
                            echo '<td>';
                            echo '<button class="action-button"><a href="edit.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                            echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                            echo '</td>';
                            echo '</tr>';
                      }
                     }


              
              
              
                     else
                     {
                            echo '<tr>';
                            echo '<td colspan="5">No Record found</td>';
                            echo '</tr>';

                     }


            
              
              
        }
        else
      {
        $this->getAllAdmins();
      }

        }




       public function getAllStudents(){
              $db = new database;
              $post_data = $db->select('student');
                  foreach($post_data as $post) {
                    echo '<tr>';
                    echo '<td>' . $post["ID"] . '</td>';
                    echo '<td>' . $post["FirstName"] . '</td>';
                    echo '<td>' . $post["LastName"] . '</td>';
                    echo '<td>' . $post["Email"] . '</td>';
                    echo '<td>' . $post["Address"] . '</td>';
                    echo '<td>' . $post["BirthDate"] . '</td>';
                    echo '<td>' . $post["PhoneNumber"] . '</td>';
                    echo '<td>' . $post["Password"] . '</td>';
                    echo '<td>' . $post["JobTitle"] . '</td>';
                    echo '<td>';
                    echo '<button class="action-button"><a href="edit_accounts.php?edit=1&email=' . $post["Email"] . '" onclick="redirectToPage(event)"><i class="fas fa-edit edit-icon"></i></a></button>';
                    echo '<button class="action-button"><a href="#" id="' . $post["Email"] . '" class="delete_student"><i class="fas fa-trash delete-icon"></i></a></button>';
                    echo '</td>';
                    echo '</tr>';
                  }
                
          }

          public function searchForStudentandselect()
             {
              $db = new database;

              


              if(isset($_GET['student_search']))
              {
              
                    $values = $_GET['student_search'];
                 
                  $query= "SELECT * FROM student WHERE CONCAT(FirstName,LastName,Email,Address,BirthDate,PhoneNumber,Password,JobTitle)
                    LIKE '%$values%'";
                    $query_run = mysqli_query($db->con,$query);
                  
                    if(mysqli_num_rows($query_run)> 0)
                    {
                      foreach($query_run as $s)
                      {
              
                        
                            echo '<tr>';
                            echo '<td>' . $s["ID"] . '</td>';
                            echo '<td>' . $s["FirstName"] . '</td>';
                            echo '<td>' . $s["LastName"] . '</td>';
                             echo '<td>' . $s["Email"] . '</td>';
                             echo '<td>' . $s["Address"] . '</td>';
                             echo '<td>' . $s["BirthDate"] . '</td>';
                             echo '<td>' . $s["PhoneNumber"] . '</td>';
                             echo '<td>' . $s["Password"] . '</td>';
                            echo '<td>' . $s["JobTitle"] . '</td>';
                           
                            
                            echo '<td>';
                            echo '<button class="action-button"><a href="edit.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                            echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                            echo '</td>';
                            echo '</tr>';
                      }
                     }


              
              
              
                     else
                     {
                            echo '<tr>';
                            echo '<td colspan="5">No Record found</td>';
                            echo '</tr>';

                     }


            
              
              
        }
        else
      {
        $this->getAllStudents();
      }

        }
       
       


        public function getAllAlumni(){
          $db = new database;
          $post_data = $db->select('alumni');
              foreach($post_data as $post) {
                echo '<tr>';
                echo '<td>' . $post["ID"] . '</td>';
                echo '<td>' . $post["FirstName"] . '</td>';
                echo '<td>' . $post["LastName"] . '</td>';
                echo '<td>' . $post["Email"] . '</td>';
                echo '<td>' . $post["Address"] . '</td>';
                echo '<td>' . $post["BirthDate"] . '</td>';
                echo '<td>' . $post["Password"] . '</td>';
                echo '<td>' . $post["PhoneNumber"] . '</td>';
                echo '<td>' . $post["JobTitle"] . '</td>';
                echo '<td>';
                echo '<button class="action-button"><a href="manage_accounts.php?edit=1&email=' . $post["Email"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                echo '<button class="action-button"><a href="#" id="' . $post["Email"] . '" class="delete_alumni"><i class="fas fa-trash delete-icon"></i></a></button>';
                echo '</td>';
                echo '</tr>';
              }
            
      }
        public function searchForAlumniandselect()
             {
              $db = new database;

              


              if(isset($_GET['alumni_search']))
              {
              
                    $values = $_GET['alumni_search'];
                 
                  $query= "SELECT * FROM alumni WHERE CONCAT(FirstName,LastName,Email,Address,BirthDate,Password,PhoneNumber,JobTitle)
                    LIKE '%$values%'";
                    $query_run = mysqli_query($db->con,$query);
                  
                    if(mysqli_num_rows($query_run)> 0)
                    {
                      foreach($query_run as $s)
                      {
              
                        
                            echo '<tr>';
                            echo '<td>' . $s["ID"] . '</td>';
                            echo '<td>' . $s["FirstName"] . '</td>';
                            echo '<td>' . $s["LastName"] . '</td>';
                             echo '<td>' . $s["Email"] . '</td>';
                             echo '<td>' . $s["Address"] . '</td>';
                             echo '<td>' . $s["BirthDate"] . '</td>';
                             echo '<td>' . $s["Password"] . '</td>';
                             echo '<td>' . $s["PhoneNumber"] . '</td>';
                            echo '<td>' . $s["JobTitle"] . '</td>';
                           
                            
                            echo '<td>';
                            echo '<button class="action-button"><a href="edit.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                            echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                            echo '</td>';
                            echo '</tr>';
                      }
                     }


              
              
              
                     else
                     {
                            echo '<tr>';
                            echo '<td colspan="5">No Record found</td>';
                            echo '</tr>';

                     }


            
              
              
        }
        else
      {
        $this->getAllAlumni();
      }

    }
    public function getAllStaff(){
           $db = new database;
           $post_data = $db->select('staff');
               foreach($post_data as $post) {
                 echo '<tr>';
                 echo '<td>' . $post["ID"] . '</td>';
                 echo '<td>' . $post["FirstName"] . '</td>';
                 echo '<td>' . $post["LastName"] . '</td>';
                 echo '<td>' . $post["Email"] . '</td>';
                 echo '<td>' . $post["Address"] . '</td>';
                 echo '<td>' . $post["BirthDate"] . '</td>';
                 echo '<td>' . $post["Password"] . '</td>';
                 echo '<td>' . $post["PhoneNumber"] . '</td>';
                 echo '<td>';
                 echo '<button class="action-button"><a href="manage_accounts.php?edit=1&email=' . $post["Email"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                 echo '<button class="action-button"><a href="#" id="' . $post["Email"] . '" class="delete_staff"><i class="fas fa-trash delete-icon"></i></a></button>';
                 echo '</td>';
                 echo '</tr>';
               }
             
       }
       
        

        public function searchForStaffandselect()
        {
         $db = new database;

         


         if(isset($_GET['staff_search']))
         {
         
               $values = $_GET['staff_search'];
            
             $query= "SELECT * FROM staff WHERE CONCAT(FirstName,LastName,Email,Address,BirthDate,Password,PhoneNumber)
               LIKE '%$values%'";
               $query_run = mysqli_query($db->con,$query);
             
               if(mysqli_num_rows($query_run)> 0)
               {
                 foreach($query_run as $s)
                 {
         
                   
                       echo '<tr>';
                       echo '<td>' . $s["ID"] . '</td>';
                       echo '<td>' . $s["FirstName"] . '</td>';
                       echo '<td>' . $s["LastName"] . '</td>';
                        echo '<td>' . $s["Email"] . '</td>';
                        echo '<td>' . $s["Address"] . '</td>';
                        echo '<td>' . $s["BirthDate"] . '</td>';
                        echo '<td>' . $s["Password"] . '</td>';
                        echo '<td>' . $s["PhoneNumber"] . '</td>';
                      
                       
                       echo '<td>';
                       echo '<button class="action-button"><a href="edit.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                       echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                       echo '</td>';
                       echo '</tr>';
                 }
                }


         
         
         
                else
                {
                       echo '<tr>';
                       echo '<td colspan="5">No Record found</td>';
                       echo '</tr>';

                }


       
         
         
   }
   else
 {
   $this->getAllStaff();
 }

   } 
        public function searchForSupportandselect()
        {
         $db = new database;

         


         if(isset($_GET['support_search']))
         {
         
               $values = $_GET['support_search'];
            
             $query= "SELECT * FROM support WHERE CONCAT(FirstName,LastName,Email,Address,BirthDate,Password,PhoneNumber,JobTitle)
               LIKE '%$values%'";
               $query_run = mysqli_query($db->con,$query);
             
               if(mysqli_num_rows($query_run)> 0)
               {
                 foreach($query_run as $s)
                 {
         
                   
                       echo '<tr>';
                       echo '<td>' . $s["ID"] . '</td>';
                       echo '<td>' . $s["FirstName"] . '</td>';
                       echo '<td>' . $s["LastName"] . '</td>';
                        echo '<td>' . $s["Email"] . '</td>';
                        echo '<td>' . $s["Address"] . '</td>';
                        echo '<td>' . $s["BirthDate"] . '</td>';
                        echo '<td>' . $s["Password"] . '</td>';
                        echo '<td>' . $s["PhoneNumber"] . '</td>';
                        echo '<td>' . $s["JobTitle"] . '</td>';
                        echo '<td>';
                       
                       echo '<td>';
                       echo '<button class="action-button"><a href="edit.php?edit=1&ID=' . $s["ID"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                       echo '<button class="action-button"><a href="#" id="' . $s["ID"] . '" class="delete"><i class="fas fa-trash delete-icon"></i></a></button>';
                       echo '</td>';
                       echo '</tr>';
                 }
                }


         
         
         
                else
                {
                       echo '<tr>';
                       echo '<td colspan="5">No Record found</td>';
                       echo '</tr>';

                }


       
         
         
   }
   else
 {
   $this->getAllSupport();
 }

   } 
       public function getAllSupport(){
              $db = new database;
              $post_data = $db->select('support');
                  foreach($post_data as $post) {
                    echo '<tr>';
                    echo '<td>' . $post["ID"] . '</td>';
                    echo '<td>' . $post["FirstName"] . '</td>';
                    echo '<td>' . $post["LastName"] . '</td>';
                    echo '<td>' . $post["Email"] . '</td>';
                    echo '<td>' . $post["Address"] . '</td>';
                    echo '<td>' . $post["BirthDate"] . '</td>';
                    echo '<td>' . $post["Password"] . '</td>';
                    echo '<td>' . $post["PhoneNumber"] . '</td>';
                    echo '<td>' . $post["JobTitle"] . '</td>';
                    echo '<td>';
                    echo '<button class="action-button"><a href="manage_accounts.php?edit=1&email=' . $post["Email"] . '"><i class="fas fa-edit edit-icon"></i></a></button>';
                    echo '<button class="action-button"><a href="#" id="' . $post["Email"] . '" class="delete_support"><i class="fas fa-trash delete-icon"></i></a></button>';
                    echo '</td>';
                    echo '</tr>';
                  }
                
          }

       public function deleteAdmin(){
              $db = new database; 
              $where = array('Email'=>$_GET["email"]);  
              $db->delete("admin", $where);  
       }   
       public function deleteAlumni(){
              $db = new database;
                     $where = array('Email'=>$_GET["email"]);  
                     $db->delete("alumni", $where); 
       }   
       public function deleteStudent(){
              $db = new database;
              $where = array('Email'=>$_GET["email"]);  
              $db->delete("student", $where);  
              
       }   
       public function deleteStaff(){
              $db = new database;  
              
                     $where = array('Email'=>$_GET["email"]);  
                     $db->delete("staff", $where);  
       }   
       public function deleteSupport(){
              $db = new database;  
                     $where = array('Email'=>$_GET["email"]);  
                     $db->delete("support", $where);  
       }  
       
       
          


 }
?>
<script>  
$(document).ready(function() {  
  $('.delete_admin').on('click', function(event) {
    event.preventDefault();
    var email = $(this).attr('id');  
    if (confirm('Are you sure you want to delete this admin?')) {  
      window.location.href = 'manage_accounts.php?delete_admin=1&email=' + email;  
    }  
  });  
}); 
$(document).ready(function() {  
  $('.delete_alumni').on('click', function(event) {
    event.preventDefault();
    var email = $(this).attr('id');  
    if (confirm('Are you sure you want to delete this alumni?')) {  
      window.location.href = 'manage_accounts.php?delete_alumni=1&email=' + email;  
    }  
  });  
}); 
$(document).ready(function() {  
  $('.delete_student').on('click', function(event) {
    event.preventDefault();
    var email = $(this).attr('id');  
    if (confirm('Are you sure you want to delete this student?')) {  
      window.location.href = 'manage_accounts.php?delete_student=1&email=' + email;  
    }  
  });  
}); 
$(document).ready(function() {  
  $('.delete_staff').on('click', function(event) {
    event.preventDefault();
    var email = $(this).attr('id');  
    if (confirm('Are you sure you want to delete this post?')) {  
      window.location.href = 'manage_accounts.php?delete_staff=1&email=' + email;  
    }  
  });  
}); 
$(document).ready(function() {  
  $('.delete_support').on('click', function(event) {
    event.preventDefault();
    var email = $(this).attr('id');  
    if (confirm('Are you sure you want to delete this post?')) {  
      window.location.href = 'manage_accounts.php?delete_support=1&email=' + email;  
    }  
  });  
}); 

 </script>