<?php

class Feedback{


    private $ID;
    private $name;
    private $content;
    private $role;

    public function setName($name){
        $this->name = $name;
    } 
    public function getName(){
        return $this->name ;
    } 
    public function setContent($content){
        $this->content = $content;
    } 
    public function getContent(){
        return $this->content ;
    } 
    public function setRole($role){
        $this->role = $role;
    } 
    public function getRole(){
        return $this->role ;
    } 

}

?>