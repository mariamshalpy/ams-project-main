<?php 

class MentorshipRequestHandler{

    

    
    public function accept_participation_request($ID) {
        $new_status = 'accepted';
        $this->updateStatus($ID,$new_status); 
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
              echo '<td>' . $post["Duration"] . '</td>';
              echo '<td>';
              echo '<button class="yes-button"><a href="mentorship_planning.php?email=' . $post["Email"] . '&id=' . $post["ID"]. '&name=' . $post["Name"] .'&type=' .$post["Type"]. '&description=' . $post["Description"] . '&date=' . $post["date"] . '&duration=' . $post["Duration"] . '" class="update"><i class="fas fa-check"></i></a></button>';
              echo '<button class="no-button"><a href="#" id="' . $post["ID"] . '" class="TechnicalCourse_delete"><i class="fas fa-times"></i> </button>';
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
              echo '<td>' . $post["Duration"] . '</td>';
              echo '<td>';
              echo '<button class="yes-button"><a href="mentorship_planning.php?email=' . $post["Email"] . '&id=' . $post["ID"]. '&name=' . $post["Name"] .'&type=' .$post["Type"]. '&description=' . $post["Description"] . '&date=' . $post["date"] . '&duration=' . $post["Duration"]. '" class="update"><i class="fas fa-check"></i></a></button>';
              echo '<button class="no-button"><a href="#" id="' . $post["ID"] . '" class="Careerbuild_delete"><i class="fas fa-times"></i> </button>';
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
              echo '<button class="yes-button"><a href="#" id="' . $post["ID"] . '" class="accept_participation_request"><i class="fas fa-check"></i> </button>';
              echo '<button class="no-button"><a href="#" id="' . $post["ID"] . '" class="participation_delete"><i class="fas fa-times"></i> </button>';
              echo '</td>';
              echo '</tr>';
            }
          
        }
        public function updateStatus($ID,$new_status)/** $key => event_name *//**reunion */
        {
            $db =new database;
            $sql = "UPDATE requesttomentorship SET status = '".$new_status."' WHERE ID = '".$ID."';";

           mysqli_query($db->con, $sql); 
        }


        /**plan events */

        

        

}


?>