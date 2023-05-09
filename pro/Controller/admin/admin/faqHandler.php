<?php

require_once '../../Controller/database.php';
require_once '../../Model/faq.php';

class FaqHandler{


  public $faq;

  
    

    public function setFAQ(){
      $db = new database;  
      $this->faq = new Faq(); // create a new instance of Faq class
        $this->faq->setQuestions('What is an alumni management system?');
        $this->faq->setAnswers('An alumni management system is a software platform designed to help educational institutions manage their alumni relationships and communications. It typically includes features such as alumni databases, event management, fundraising tools, and communication channels such as email and social media.');
        $data = array('Questions'=>$this->faq->getQuestions(),'Answers'=>$this->faq->getAnswers());
        $db->insert('faq',$data);
        
      
      }

    public function getAllFaq(){
        $db = new database;
        $post_data = $db->select('faq');
        foreach($post_data as $post) {  
            echo '<tr>';  
            echo '<td>' . $post["Questions"] . '</td>';  
            echo '<td>' . $post["Answers"] . '</td>';  
            echo '</tr>';  
        }  
    }




}



?>
