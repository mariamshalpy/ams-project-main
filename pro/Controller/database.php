<?php
class database {

     public $con;  
     public $error;  
     public function __construct()  
     {  
          $this->con = mysqli_connect("localhost", "root", "", "ams");  
          if(!$this->con)  
          {  
               echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
          }  
     }  
     public function insert($table_name, $data)  
     {  
          $string = "INSERT INTO `".$table_name."` (";            
          $string .= implode(",", array_keys($data)) . ') VALUES (';            
          $string .= "'" . implode("','", array_values($data)) . "')";  
          if(mysqli_query($this->con, $string))  
          {  
               return true;  
          }  
          else  
          {  
               echo mysqli_error($this->con);  
          }  
     } 
     public function select($table_name)  
     {  
          $array = array();  
          $query = "SELECT * FROM `".$table_name."`";  
          $result = mysqli_query($this->con, $query);  
          while($row = mysqli_fetch_assoc($result))  
          {  
               $array[] = $row;  
          }  
          return $array;  
     }   
     public function select_where($table_name, $where_condition)  
     {  
          $condition = '';  
          $array = array();  
          foreach($where_condition as $key => $value)  
          {  
               $condition .= $key . " = '".$value."' AND ";  
          }  
          $condition = substr($condition, 0, -5);  
          $query = "SELECT * FROM `".$table_name."` WHERE " . $condition;  
          $result = mysqli_query($this->con, $query);  
          while($row = mysqli_fetch_array($result))  
          {  
               $array[] = $row;  
          }  
          return $array;  
     }  
     public function update($table_name, $fields, $where_condition)  
     {  
          $query = '';  
          $condition = '';  
          foreach($fields as $key => $value)  
          {  
               $query .= $key . "='".$value."', ";  
          }  
          $query = substr($query, 0, -2);  
          
          foreach($where_condition as $key => $value)  
          {  
               $condition .= $key . "='".$value."' AND ";  
          }  
          $condition = substr($condition, 0, -5);   
          $query = "UPDATE `".$table_name."` SET ".$query." WHERE ".$condition."";  
          if(mysqli_query($this->con, $query))  
          {  
               return true;  
          }  
     }  
     public function delete($table_name, $where_condition)  
     {  
          $condition = '';  
          foreach($where_condition as $key => $value)  
          {  
               $condition .= $key . " = '".$value."' AND ";  
               
               $condition = substr($condition, 0, -5);  
               $query = "DELETE FROM `".$table_name."` WHERE ".$condition."";  
               if(mysqli_query($this->con, $query))  
               {  
                    return true;  
               }  
          }  
     }  
}  

