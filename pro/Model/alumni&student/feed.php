<?php
include '../../Controller/db_conn.php';


class Feed
{
    private $name;
    private $content;
    private $role;

    public function getname()
    {
        return $this->$name;
    }
    public function getcontent()
    {
        return $this->$content;
    }
    public function getrole()
    {
        return $this->$role;
    }
    public function setrole($ro)
    {
        $this->$role=$ro;
    }
    public function setname($na)
    {
        $this->$name=$na;
    }
    public function setcontent($co)
    {
        $this->$content=$co;
    }
}
?>