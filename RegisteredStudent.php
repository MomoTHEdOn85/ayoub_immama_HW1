<?php

require_once('Student.php');

class RegisteredStudent extends Student {

  private $registeredStudent;

  public function __construct($id, $fname, $lname, $image, $program_id, $level, $gender, $created, $updated, $startclass, $registered) {
    parent::__construct($id, $fname, $lname, $image, $program_id, $level, $gender, $created, $updated, $startclass);
    $this->registeredStudent = $registered;

  }

  public function setRegisteredStudent($registeredStudent){
    $this->registeredStudent = $registered;

  }

  public function getRegisteredStudent (){
    return $this->registeredStudent;

  }

  public function setClassStarted($startclass) {
    $this->class_start = $startclass;

  }

  //Overding getClassStarted
  public function getClassStarted() {
    return $this->class_start;
    echo 'Schedule Available: ' .$this->class_start;

  }

}

 
 



 
?>