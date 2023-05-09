
<?php
class Program {
  private $id;
  private $name;
  private $type;
  private $description;
  private $duration;
  private $placeId;

 



  public function get_name() {
    return $this->name;
  }

  public function get_type() {
    return $this->type;
  }

  public function get_description() {
    return $this->description;
  }

  public function get_duration() {
    return $this->duration;
  }

  public function get_place_id() {
    return $this->placeId;
  }

 

  public function set_id($id) {
    $this->id = $id;
  }

  public function set_name($name) {
    $this->name = $name;
  }

  public function set_type($type) {
    $this->type = $type;
  }

  public function set_description($description) {
    $this->description = $description;
  }

  public function set_duration($duration) {
    $this->duration = $duration;
  }

  public function set_place_id($placeId) {
    $this->placeId = $placeId;
  }

  

  
}

?>

