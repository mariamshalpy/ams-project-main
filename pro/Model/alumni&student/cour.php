<?php

class cour{

    public function insert_data()
    {
        $use=new database;
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['des']) && isset($_POST['type']) && isset($_POST['bdate']))
  {
    /*$name=$_POST['name'];
    $content=$_POST['content'];
    $role=$_POST['role'];
    $rate=$_POST['rate'];*/
    $data=array('Name '=>$_POST['name'],'Email'=>$_POST['email'],'Type'=>$_POST['type'],'Description' =>$_POST['des'],'date'=>$_POST['bdate']);
    $use->insert('requesttomentorship',$data);
    }
}
}


?>