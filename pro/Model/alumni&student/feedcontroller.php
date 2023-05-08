<?php
include '../../Controller/db_conn.php';

include 'feed.php';
 class feedcont{
    public function connect()
    {
        $con=mysqli_connect('localhost','root','','ams');
        return $con;
    }
  



    public function insertfeed($name,$cont,$role)
{
    
    $conn=$this->connect();
    $q="INSERT INTO `feedback`(`name`, `content`, `role`) VALUES ('$name','$cont','$role');";
    mysqli_query($conn,$q);
   
    
  

}


}

?>