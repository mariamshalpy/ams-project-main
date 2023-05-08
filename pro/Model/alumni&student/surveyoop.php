<?php
require '../../Controller/handler.php'; 

class surveyoop
{
    public function insertdata()
    {
        $use=new database;
  if(isset($_POST['name']) && isset($_POST['content']) && isset($_POST['role']) && isset($_POST['rate']))
  {
    $name=$_POST['name'];
    $content=$_POST['content'];
    $role=$_POST['role'];
    $rate=$_POST['rate'];
    $data=array('name '=>$_POST['name'],'role'=>$_POST['role'],'rate'=>$_POST['rate'],'content' =>$_POST['content']);
    $use->insert('survey',$data);
    $errMsg="";
  }
    }
}



?>