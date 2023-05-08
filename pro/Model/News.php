
<?php
class News {
  private $ID;
   private $title;
   private $content;
   private $createdAt;
 
   public function getTitle() {
     return $this->title;
   }
 
   public function setTitle($title) {
     $this->title = $title;
   }
 
   public function getContent() {
     return $this->content;
   }
 
   public function setContent($content) {
     $this->content = $content;
   }
 
   public function getCreatedAt() {
     return $this->createdAt;
   }
 


   public function setCreatedAt($createdAt = null) {
      if ($createdAt == null) {
        $this->createdAt = date("Y-m-d");
      } else {
        $this->createdAt =$createdAt;
      }
      
   }
}
?>



