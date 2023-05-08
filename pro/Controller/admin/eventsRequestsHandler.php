<?php 

require_once '../../Controller/database.php';
class EventsRequestsHandler{

    
    public function accept_participation_request($Email) {
        $event_column = 'name';
        $value = $this->getEventName($Email);
        $number_of_attendence = $this->getNumberOfAttendence($event_column,$value);
        $this->updateNumberOfAttendence($number_of_attendence,$value);
        $new_status = 'accepted';
        $this->updateStatus($Email,$new_status); 
      }
    public function accept_planing_request($Email) {
        //redirect to add new evdnt form
      }
      
      
    public function getAllPlanRequests(){
        $db = new database;
        $where = array('Type'=> 'plan','status'=>'pending');
        $post_data = $db->select_where('event_request',$where);
            foreach($post_data as $post) {
              echo '<tr>';
              echo '<td>' . $post["ID"] . '</td>';
              echo '<td>' . $post["Email"] . '</td>';
              echo '<td>' . $post["Type"] . '</td>';
              echo '<td>' . $post["date"] . '</td>';
              echo '<td>' . $post["Description"] . '</td>';
              echo '<td>' . $post["name"] . '</td>';
              echo '<td>' . $post["status"] . '</td>';
              echo '<td>';
              echo '<button class="yes-button"><a href="Event_planning.php?email=' . $post["Email"] . '&name=' . $post["name"] . '&description=' . $post["Description"] . '&date=' . $post["date"] . '" class="update"><i class="fas fa-check"></i></a></button>';
              echo '<button class="no-button"><a href="#" id="' . $post["Email"] . '" class="plan_delete"><i class="fas fa-times"></i> </button>';
              echo '</td>';
              echo '</tr>';
            }
          
        }
    public function getAllParticipateRequests(){
        $db = new database;
        $where = array('Type'=> 'participate','status'=>'pending');
        $post_data = $db->select_where('event_request',$where);
            foreach($post_data as $post) {
              echo '<tr>';
              echo '<td>' . $post["ID"] . '</td>';
              echo '<td>' . $post["Email"] . '</td>';
              echo '<td>' . $post["Type"] . '</td>';
              echo '<td>' . $post["name"] . '</td>';
              echo '<td>' . $post["status"] . '</td>';
              echo '<td>';
              echo '<button class="yes-button"><a href="#" id="' . $post["Email"] . '" class="accept_participation_request"><i class="fas fa-check"></i> </button>';
              echo '<button class="no-button"><a href="#" id="' . $post["Email"] . '" class="participation_delete"><i class="fas fa-times"></i> </button>';
              echo '</td>';
              echo '</tr>';
            }
          
        }

        public function getNumberOfAttendence($key,$value)/** $key => event_name */
        {
            $db =new database;
            $where = array($key => $value);
            $event_info = $db->select_where('events',$where);
            return $event_info[0]["NumberOfAttendence"];
        }
        public function getEventName($email)/** $key => event_name */
        {
            $db =new database;
            $where = array('Email' => $email);
            $event_request_info = $db->select_where('event_request',$where);
            return $event_request_info[0]["name"];
        }
        public function updateNumberOfAttendence($NumberOfAttendence,$event_name)/** $key => event_name *//**reunion */
        {
            $db =new database;
            $sql = "UPDATE events SET NumberOfAttendence = ( ".$NumberOfAttendence." + 1) WHERE name = '".$event_name."';";

        // Execute the SQL query
        if (mysqli_query($db->con, $sql)) {
        }
        else 
        {
            echo "error";
        }
        }
        public function updateStatus($email,$new_status)/** $key => event_name *//**reunion */
        {
            $db =new database;
            $sql = "UPDATE event_request SET status = '".$new_status."' WHERE Email = '".$email."';";

           mysqli_query($db->con, $sql); 
        }


        /**plan events */

        

        

        
       

       

        

   
        


}


?>