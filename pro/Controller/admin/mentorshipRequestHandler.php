<?php 

class MentorshipRequestHandler{

    

    
    public function accept_participation_request($Email) {
        $new_status = 'accepted';
        $this->updateStatus($Email,$new_status); 
      }
    public function accept_planing_request($Email) {
        //redirect to add new evdnt form
      }
      
      
    public function getAllPlanTechnicalCourseRequests(){
        $db = new database;
        $where = array('Type'=> 'Technical course',
        'status'=>'pending');
        $post_data = $db->select_where('requesttomentorship',$where);
            foreach($post_data as $post) {
              echo '<tr>';
              echo '<td>' . $post["ID"] . '</td>';
              echo '<td>' . $post["Email"] . '</td>';
              echo '<td>' . $post["Name"] . '</td>';
              echo '<td>' . $post["Type"] . '</td>';
              echo '<td>' . $post["date"] . '</td>';
              echo '<td>' . $post["Description"] . '</td>';
              echo '<td>' . $post["status"] . '</td>';
              echo '<td>';
              echo '<button class="yes-button"><a href="mentorship_planning.php?email=' . $post["Email"] . '&name=' . $post["Name"] .'&type=' .$post["Type"]. '&description=' . $post["Description"] . '&date=' . $post["date"] . '" class="update"><i class="fas fa-check"></i></a></button>';
              echo '<button class="no-button"><a href="#" id="' . $post["Email"] . '" class="TechnicalCourse_delete"><i class="fas fa-times"></i> </button>';
              echo '</td>';
              echo '</tr>';
            }
          
        }
    public function getAllPlanCareerbuildRequests(){
        $db = new database;
        $where = array('Type'=> 'Careerbuild',
        'status'=>'pending');
        $post_data = $db->select_where('requesttomentorship',$where);
            foreach($post_data as $post) {
              echo '<tr>';
              echo '<td>' . $post["ID"] . '</td>';
              echo '<td>' . $post["Email"] . '</td>';
              echo '<td>' . $post["Name"] . '</td>';
              echo '<td>' . $post["Type"] . '</td>';
              echo '<td>' . $post["date"] . '</td>';
              echo '<td>' . $post["Description"] . '</td>';
              echo '<td>' . $post["status"] . '</td>';
              echo '<td>';
              echo '<button class="yes-button"><a href="mentorship_planning.php?email=' . $post["Email"] . '&name=' . $post["Name"] .'&type=' .$post["Type"]. '&description=' . $post["Description"] . '&date=' . $post["date"] . '" class="update"><i class="fas fa-check"></i></a></button>';
              echo '<button class="no-button"><a href="#" id="' . $post["Email"] . '" class="Careerbuild_delete"><i class="fas fa-times"></i> </button>';
              echo '</td>';
              echo '</tr>';
            }
          
        }
    public function getAllParticipateRequests(){
        $db = new database;
        $where = array('Type'=> 'participate','status'=>'pending');
        $post_data = $db->select_where('requesttomentorship',$where);
            foreach($post_data as $post) {
              echo '<tr>';
              echo '<td>' . $post["ID"] . '</td>';
              echo '<td>' . $post["Email"] . '</td>';
              echo '<td>' . $post["Type"] . '</td>';
              echo '<td>' . $post["Name"] . '</td>';
              echo '<td>' . $post["status"] . '</td>';
              echo '<td>';
              echo '<button class="yes-button"><a href="#" id="' . $post["Email"] . '" class="accept_participation_request"><i class="fas fa-check"></i> </button>';
              echo '<button class="no-button"><a href="#" id="' . $post["Email"] . '" class="participation_delete"><i class="fas fa-times"></i> </button>';
              echo '</td>';
              echo '</tr>';
            }
          
        }
        public function updateStatus($email,$new_status)/** $key => event_name *//**reunion */
        {
            $db =new database;
            $sql = "UPDATE requesttomentorship SET status = '".$new_status."' WHERE Email = '".$email."';";

           mysqli_query($db->con, $sql); 
        }


        /**plan events */

        

        public function valid(Place $place){
            $array = array();  
            $query= "SELECT Place.booking_date,Place.Name,Place.time_slot FROM Place;";
            $conn = mysqli_connect("localhost", "root", "", "ams");
            $result = mysqli_query($conn,$query);    
            $count_place =0;
            $count_time=0;
          
          
            while ($row = mysqli_fetch_assoc($result)) { 
                //check if the Date in the table 
                if (strcmp($row["booking_date"], $place->get_date()) == 0) {
                          
                            if ( strcmp($row["booking_date"], $place->get_date()) == 0 && strcmp($row["Name"], $place->get_name())  == 0){
                                    $count_place++;
                                    if (strcmp($row["Name"], $place->get_name())  == 0 && strcmp($row["booking_date"], $place->get_date()) == 0 && strcmp($row["time_slot"], $place->get_time_slot())  == 0) {
                                        $count_place++;
                                    }
                                    else {
                                        $count_place--;   
                                    }   
                            }// first sub if 
                         
                else {
                            if ( strcmp($row["booking_date"], $place->get_date()) == 0 && strcmp($row["time_slot"], $place->get_time_slot())  == 0){
                                    $count_time++;
                                    if (strcmp($row["Name"], $place->get_name())  == 0 && strcmp($row["booking_date"], $place->get_date()) == 0 && strcmp($row["time_slot"], $place->get_time_slot())  == 0) {
                                        $count_time++;
                                    }
                                    else {
                                        $count_time--;

                                    }    
                                
                                }
                                else {

                                }
                

                }

                      }//first if condition
                     } // while
       
        if ( $count_time==0 && $count_place==0) {
            return true;
         
        } else {
            return false;
        }
                

         }
            

 /*
        if ($result) { // Check if $result is not null
            while ($row = mysqli_fetch_assoc($result)) {  
             $array[] = $row;
            foreach ($array as $row) {
                foreach ($row as $row['booking_date']) {
                if ($row['booking_date'] == $place->get_date()) {

                    if ($row['booking_date'] == $place->get_date() && $row['Name'] == $place->get_name() ) {
                        if ($row['booking_date'] == $place->get_date() && $row['Name'] == $place->get_name() && $row['time_slot'] == $place->get_time_slot()) {
                            echo "Match found!";
                            return false;
                        }
                        
                    }
                    else {
                        echo "No match  place &date found 1";
                        return true;
                    }
                    
                }
                else{
                    echo "No match date found  !";
                    echo  $place->get_date();
                    return true;
                }
             }
            }
          }
        }
*/

        
       

       

        

   
        


}


?>