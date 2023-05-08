<?php

require '../../Controller/handler.php'; 
class feedbackoop
{

    public function getdata()
    {
        $use=new database;
  if(isset($_POST['name']) && isset($_POST['content']) && isset($_POST['role']) )
  {
    $name=$_POST['name'];
    $content=$_POST['content'];
    $role=$_POST['role'];
    
    $data=array('name '=>$_POST['name'],'role'=>$_POST['role'],'content' =>$_POST['content']);
    $use->insert('feedback',$data);
    }
}
}

?>