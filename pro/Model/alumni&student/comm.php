<?php

class comm
{
    public function insertdata()
    {
        $use=new database;
        if(isset($_POST['emailto']) && isset($_POST['emailfrom']) && isset($_POST['message']) && isset($_POST['role']) )
        {
          $emailfrom=$_POST['emailfrom'];
        $emailto=$_POST['emailto'];
        $messege=$_POST['message'];
        $role=$_POST['role'];
      
          $data=array('email_to '=>$_POST['emailto'],'email_from'=>$_POST['emailfrom'],'content' =>$_POST['message'],'role'=>$_POST['role']);
          $use->insert('communication',$data);
    }
}
}
?>