<?php
class Faq {
    private $Questions ;
    private $Answers ;
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
    

}
?>