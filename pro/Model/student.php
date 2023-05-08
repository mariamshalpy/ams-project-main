<?php

class Student {
    private $ID;
    private $FirstName;
    private $LastName;
    private $Email;
    private $Address;
    private $BirthDate;
    private $Password;
    private $PhoneNumber;
    private $JobTitle;

    public function setFirstName(string $FirstName){
        $this->FirstName = $FirstName;
    }
    public function getFirstName(){
        return $this->FirstName;
    }
    public function setLastName(string $LastName){
        $this->LastName = $LastName;
    }
    public function getLastName(){
        return $this->LastName;
    }
    public function setEmail(string $Email){
        $this->Email = $Email;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function setAddress(string $Address){
        $this->Address = $Address;
    }
    public function getAddress(){
        return $this->Address;
    }
    public function setBirthDate($BirthDate){
        $this->BirthDate = $BirthDate;
    }
    public function getBirthDate(){
        return $this->BirthDate;
    }
    public function setPassword($Password){
        $this->Password = $Password;
    }
    public function getPassword(){
        return $this->Password;
    }
    public function setPhoneNumber($PhoneNumber){
        $this->PhoneNumber = $PhoneNumber;
    }
    public function getPhoneNumber(){
        return $this->PhoneNumber;
    }
    public function setJobTitle($JobTitle){
        $this->JobTitle = $JobTitle;
    }
    public function getJobTitle(){
        return $this->JobTitle;
    }

}

?>