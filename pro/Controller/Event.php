
<?php

class Event {

  private $NumberOfAttendence;
  private $EventDescription;
  private $place_id;
  private $name;
  private $id;






  /*
if ($result) { // Check if $result is not null
            while ($row = mysqli_fetch_assoc($result)) {  
               // $array[] = $row;
                if (strpos($row["booking_date"], $place->get_date()) == false) {
                    echo "no match date!";
                    $found = true;
                }
                else {
                    if (strpos($row["time_slot"], $place->get_time_slot()) == false){
                        if (strpos($row["Name"], $place->get_name()) == false) {
                            $found=true; 
                         }
                         else {
                            echo "choose another Date or another time &place";
                            $found =false;  
                         }   
                    }
                }
            } 
             
        } 

  
                 
                */

  public function get_id() {
    return $this->id;
   }
   public function set_id($id) {
    $this->id = $id;
    }


  
  
  /////////////////////////////

  public function get_number_Of_attendence() {
      return 0;
  }
  
  /////////////////////

  public function get_description() {
      return $this->EventDescription;
  }

  public function set_description($EventDescription) {
      $this->EventDescription = $EventDescription;
  }

 


  ///////////////////////////////////////////
  public function get_placeId() {
      return $this->place_id;
  }

  public function set_placeId($place_id) {
      $this->place_id = $place_id;
  }
/////////////////////////////////
  public function get_name() {
      return $this->name;
  }

  public function set_name($name) {
      $this->name = $name;
  }






}

?>
