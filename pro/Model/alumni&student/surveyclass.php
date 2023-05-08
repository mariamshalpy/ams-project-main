
<?php

class survey
{

    private $name;
    private $content;
    private $role;
    private $rate;

    public function getname()
    {
        return $this->name;
    }
    public function getcontent()
    {
        return $this->content;
    }
    public function getrole()
    {
        return $this->role;
    }
    public function getate()
    {
        return $this->rate;
    }
    public function setname($na)
    {
        $this->name=$na;
    }
    public function setcontent($co)
    {
        $this->content=$co;
    }
    public function setrole($ro)
    {
        $this->role=$ro;
    }
    public function setrate($rt)
    {
        $this->rate=$rt;
    }
}



?>