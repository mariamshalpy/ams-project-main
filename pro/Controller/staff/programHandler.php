<?php


require_once "database.php";
class Programhandler{


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







////////-----------------Add Place---------------------------------



public function get_ID(Place $place){            
            $query = "SELECT booking_date, Name, time_slot, ID 
            FROM Place
            WHERE booking_date >= '".$place->get_date()."' AND 
                    time_slot = '".$place->get_time_slot()."' AND 
                    Name = '".$place->get_name()."';";
            $conn = mysqli_connect("localhost", "root", "", "ams");
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            if ($row && $row['Name'] == $place->get_name() && $row['time_slot'] == $place->get_time_slot()) {
                return $id = $row['ID'];
            }
}

public function add_place(Place $place){
    $db =new database();
    $handler =new Programhandler(); 
    $data_place =array(
        "Name"=>mysqli_real_escape_string($db->con,$place->get_name()),
        "booking_date"=>mysqli_real_escape_string($db->con,$place->get_date()),
        "time_slot"=>mysqli_real_escape_string($db->con,$place->get_time_slot()));
        
    if($db->insert('place',$data_place))  
    { 
        $id= $handler->get_ID($place);
        return $id;

        
    }
    else {
                echo 'data Not  inserted';
    }

}


    ////////////////////////////////////////  add program          //////////////////////////////////////////////////
    public function add_program(Program $program,Place $place){
        $handler =new Programhandler();
        $db =new database();    
 
            if(isset($_POST["add"])){
                $valid =$handler->valid($place);
                if($valid == true){   
                    $id =$handler->add_place($place);             
                    $data = array(
                        "name" =>mysqli_real_escape_string($db->con, $program->get_name()),
                        "Type"=>mysqli_real_escape_string($db->con,$program->get_type()) ,
                        "Duration" =>mysqli_real_escape_string($db->con,$program->get_duration()),
                        "Description" =>mysqli_real_escape_string($db->con,$program->get_description()),
                        "PlaceId"=>mysqli_real_escape_string($db->con,$id));
            
                        if($db->insert('mentorshipprogram',$data))  
                            {   
            
                            }
                        else {
                            echo 'data Not  inserted';
                        }
                
                }
                }

    
    
    }

    //Done

    public function selcet_data(){
        $array = array();  
        $query= "SELECT 
        FROM mentorshipprogram
        INNER JOIN place ON mentorshipprogram.PlaceId = place.ID";
        $conn = mysqli_connect("localhost", "root", "", "ams");
        $result = mysqli_query($conn,$query);   
        while($row = mysqli_fetch_assoc($result))  
        {  
            $array[] = $row;  
        }  
                  return $array;  
    }


    public function get_all_data(){
        $db =new database();
        $data = $db->select('mentorshipprogram');
        foreach($data as $program){
          echo "<tr>";
          echo "<td>".$program["ID"]."</td>";
          echo "<td>".$program["Name"]."</td>";
          echo "<td>".$program["Type"]."</td>";
          echo "<td>".$program["Description"]."</td>";
          echo "<td>".$program["Duration"]."</td>";
          echo "<td>";
          echo ' <button class="action-button"><i class="fas fa-edit edit-icon"></i></button>';
          echo '<button class= "action-button" onclick= "'.'<?php echo $handler->delete(); ?>">'.'<i class="fas fa-trash delete-icon"></i></button>';
          echo "</td>";
          echo "<tr>";
        }
      }


    

    
}

?>

















