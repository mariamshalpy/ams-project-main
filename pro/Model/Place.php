<?php

class Place {
    private $ID;
    private $Name;
    private $Date;
    private $time_slot;

    
  public function get_time_slot() {
    return $this->time_slot;
   }
   public function set_time_slot($time_slot) {
    $this->time_slot = $time_slot;
    }
   
    public function get_iD() {
        return $this->ID;
    }

    public function set_iD($ID) {
        $this->ID = $ID;
    }

    public function get_name() {
        return $this->Name;
    }

    public function set_name($Name) {
        $this->Name = $Name;
    }

    public function get_date() {
        return $this->Date;
    }

    public function set_date($Date) {
        $this->Date = $Date;
    }
}

?>