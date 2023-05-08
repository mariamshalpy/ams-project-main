<?php

class itoop{


    public function insertdata()
    {
        $data=new database;
  if(isset($_POST['issue']) && isset($_POST['email_to']) && isset($_POST['email_from']) )
  {
    //$name=$_POST['issue'];
    
  
    $where=array('email_to'=>$_POST['email_to'],'role'=>$_SESSION['role'],'content'=>$_POST['issue'],'email_from'=>$_POST['email_from']);
    $data->insert('it_support_email',$where);
    }

}
}

?>