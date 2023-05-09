
<?php
class News {
   private $title;
   private $content;
   private $createdAt;
   private $id;



   public function get_title() {
     return $this->title;
   }
 
   public function set_title($title) {
     $this->title = $title;
   }
 
   public function get_content() {
     return $this->content;
   }
 
   public function set_content($content) {
     $this->content = $content;
   }
 
   public function get_createdAt() {
     return $this->createdAt;
   }
 


   public function set_createdAt() {
     
        $this->createdAt = date("Y-m-d");
      
   }

   public function set_id($id) {
    $this->title = $id;
  }

  public function get_id() {
    return $this->id;
  }
}
?>



