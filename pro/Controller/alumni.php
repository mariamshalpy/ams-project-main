<?php
class Alumni {
    private $FirstName;
    private $LastName;
    private $Email;
    private $Address;
    private $BirthDate;
    private $Password;
    private $PhoneNumber;
    private $JobTitle;

    // Getter methods
    public function get_first_name() {
        return $this->FirstName;
    }

    public function get_last_name() {
        return $this->LastName;
    }

    public function get_email() {
        return $this->Email;
    }

    public function get_address() {
        return $this->Address;
    }

    public function get_birth_date() {
        return $this->BirthDate;
    }

    public function get_password() {
        return $this->Password;
    }

    public function get_phone() {
        return $this->PhoneNumber;
    }

    public function get_jobTitle() {
        return $this->JobTitle;
    }

    // Setter methods
    public function set_first_name($FirstName) {
        $this->FirstName = $FirstName;
    }

    public function set_last_name($LastName) {
        $this->LastName = $LastName;
    }

    public function set_email($Email) {
        $this->Email = $Email;
    }

    public function set_address($Address) {
        $this->Address = $Address;
    }

    public function set_birth_date($BirthDate) {
        $this->BirthDate = $BirthDate;
    }

    public function set_password($Password) {
        $this->Password = $Password;
    }

    public function set_phone($PhoneNumber) {
        $this->PhoneNumber = $PhoneNumber;
    }

    public function set_job_title($JobTitle) {
        $this->JobTitle = $JobTitle;
    }
}


?>