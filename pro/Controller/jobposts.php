<?php

class JobPosts{

private $ID;
private $CompanyName;
private $Title;
private $JobDescription;
private $CreatedAt;



public function getID()
{

    return $this->ID;
}
public function setCompanyName(String $CompanyName)
{
    $this->CompanyName = $CompanyName;

    
}
public function getCompanyName(){

    return $this->CompanyName;
}



public function setTitle(String $Title)
{
    $this->Title = $Title;

    
}
public function getTitle(){

    return $this->Title;
}

public function setJobDescription(String $JobDescription)
{
    $this->JobDescription=$JobDescription;
}
public function getJobDescription()
{

    return $this->JobDescription;
}

public function setCreatedAt($CreatedAt) {

    $this->CreatedAt = date($CreatedAt);
}
public function getCreatedAt() {

    return $this->CreatedAt ;
}



}





?>