<?php
class Account {
    private $Questions;
    private $Answers;
    private $AdminId;

    public function setQuestions($Questions){
        $this->Questions = $Questions;
    }
    public function getQuestions(){
        return $this->Questions ;
    }
    public function setAnswers($Answers){
        $this->Answers = $Answers;
    }
    public function getAnswers(){
        return $this->Answers ;
    }
    public function setAdminId($AdminId){
        $this->AdminId = $AdminId;
    }
    public function getAdminId(){
        return $this->AdminId ;
    }

}
?>