<?php

class Admin {
    private $ID; 
    private $FirstName; 
    private $LastName; 
    private $Email; 
    private $Password; 

    
    public function setFirstName(string $firstName){
        $this->FirstName = $firstName;
    }
    public function setLastName(string $lastName){
        $this->LastName = $lastName;
    }
    public function setEmail(string $email){
        $this->Email = $email;
    }
    public function setPassword(string $password){
        $this->Password = $password;
    }
    public function getFirstName(){
        return $this->FirstName;
    }
    public function getLastName(){
        return $this->LastName ;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function getPassword(){
        return $this->Password;
    }

    
    
} 
?>