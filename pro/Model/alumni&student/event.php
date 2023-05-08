<?php

class event_request{

    public function insertevent()
    {
        $use=new database;
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['type']) )
        {
         
          $data=array('Name'=>$_POST['name'],'Email'=>$_POST['email'],'Type'=>$_POST['type']);
          $use->insert('event_request',$data);
    }
    
}
}

?>
