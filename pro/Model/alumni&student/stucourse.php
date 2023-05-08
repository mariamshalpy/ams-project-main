<?php

class cour{

    public function insert_data()
    {
        $use=new database;
  if(isset($_POST['name']) && isset($_POST['email']) )
  {

    $data=array('Name '=>$_POST['name'],'Email'=>$_POST['email'],'Type'=>"participate");
    $use->insert('requesttomentorship',$data);
    }
}
}


?>

