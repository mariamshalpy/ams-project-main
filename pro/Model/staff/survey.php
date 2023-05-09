<?php

class Survey {
    private $id;
    private $name;
    private $rate;
    private $role;
    private $content;
  
    public function __construct($id, $name, $rate, $role, $content) {
      $this->id = $id;
      $this->name = $name;
      $this->rate = $rate;
      $this->role = $role;
      $this->content = $content;
    }
  
    public function get_id() {
      return $this->id;
    }
  
    public function get_name() {
      return $this->name;
    }
  
    public function get_rate() {
      return $this->rate;
    }
  
    public function get_role() {
      return $this->role;
    }
  
    public function get_content() {
      return $this->content;
    }
  
    public function set_id($id) {
      $this->id = $id;
    }
  
    public function set_name($name) {
      $this->name = $name;
    }
  
    public function set_rate($rate) {
      $this->rate = $rate;
    }
  
    public function set_role($role) {
      $this->role = $role;
    }
  
    public function set_content($content) {
      $this->content = $content;
    }
  }
  ?>