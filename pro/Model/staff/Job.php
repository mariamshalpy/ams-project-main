
<?php




class Job {
  private $companyName;
  private $createdAt;
  private $jobDescription;
  private $title;

  public function get_companyName() {
    return $this->companyName;
  }

  public function set_companyName($companyName) {
    $this->companyName = $companyName;
  }

  public function get_createdAt() {
    return $this->createdAt;
  }

  public function set_createdAt() {
   
      $this->createdAt = date("Y-m-d");
  
    
 }

  public function get_job_description() {
    return $this->jobDescription;
  }

  public function set_job_description($jobDescription) {
    $this->jobDescription = $jobDescription;
  }

  public function get_title() {
    return $this->title;
  }

  public function set_Title($title) {
    $this->title = $title;
  }

  
}








?>

