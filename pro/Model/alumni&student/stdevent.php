<?php

class event_request{

    public function insertevent()
    {
        $use=new database;
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['des'])&& isset($_POST['bdate']))
  {

    $data=array('Name '=>$_POST['name'],'Email'=>$_POST['email'],'Type'=>"participate",'Description' =>$_POST['des'],'date'=>$_POST['bdate']);
          $use->insert('event_request',$data);
    }
}
}

?>