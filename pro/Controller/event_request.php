<?php

class Event_request{

    private $ID; 
    
    private $Email;
    
    private $Type;

    private $Description;
    
    private $event_name;


    public function setEmail($Email){
        $this->Email = $Email;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function setType($Type){
        $this->Type = $Type;
    }
    public function getType(){
        return $this->Type;
    }
    public function setDescription($Description){
        $this->Description = $Description;
    }
    public function getDescription(){
        return $this->Description;
    }
    public function setevent_name($event_name){
        $this->event_name = $event_name;
    }
    public function getevent_name(){
        return $this->event_name;
    }
    

}

?>