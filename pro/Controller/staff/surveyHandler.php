<?php

require_once "database.php";
//require_once "../../Model/survey.php";

class Surveyhandler{
   

        public function selcet_survey(){
          $db =new database();
          $data = $db->select("survey");
          return $data;
        }

        public function get_all_data(){
       
          $handler =new Surveyhandler();
          $data = $handler->selcet_survey();
          foreach($data as $survey){
                echo "<tr>";
                echo "<td>".$survey["ID"]."</td>";
                echo "<td>".$survey["name"]."</td>";
                echo "<td>".$survey["content"]."</td>";
                echo "<td>".$survey["rate"]."</td>";
                echo "<td>".$survey["role"]."</td>";
                echo "</td>";
                echo "<tr>";
          }
        }
   
        
      


    }             
                    
  ?>