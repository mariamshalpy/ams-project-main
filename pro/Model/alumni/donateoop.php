<?php

require '../../Controller/handler.php'; 
class donateoop{

public function getid($name)
{
    $use=new database;
    $data=$use->select_where('alumni',$name);
    foreach($data as $data)
    {
        $data[0];
    }
}
public function getdata(){
    $use=new database;
    if(isset($_POST['email']) && isset($_POST['amount']))
  {
    $name=$_POST['email'];
    $amount=$_POST['amount'];
    
    $data=array('alumni_email'=>$_POST['email'],'Amount'=>$_POST['amount']);
    $use->insert('donation',$data);
    $errMsg="";
  }
}
}

?>