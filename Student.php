<?php


class Student {
  protected $id;
  protected $fname;
  protected $lname;
  protected $image;
  protected $created_at;
  protected $program_id;
  protected $level;
  protected $gender;
  protected $updated_at;
  protected $class_start;

  public function __construct($id, $fname, $lname, $image, $program_id, $level, $gender, $created, $updated, $startclass) {
    $this->id = $id;
    $this->fname = $fname;
    $this->lname = $lname;
    $this->image = $image;
    $this->program_id = $program_id;
    $this->level = $level;
    $this->gender = $gender;
    $this->created_at = $created;
    $this->updated_at = $updated;
    $this->class_start = $startclass;
  }
//Setter
  public function setId($id) {
    $this->id = $id;
  }

  public function setFname($fname) {
    $this->fname = $fname;
  }

  public function setLname($lname) {
    $this->lname = $lname;
  }

  public function setImage($image) {
    $this->image = $image;
  }

  public function setProgramId($program_id) {
    $this->program_id = $program_id;
  }

  public function setLevel($level) {
    $this->level = $level;
  }

  public function setGender($gender) {
    $this->gender = $gender;
  }

  public function setCreated($created) {
    $this->created_at = $created;
  }

  public function setUpdated($updated) {
    $this->updated_at = $updated;
  }

  public function setClassStarted($startclass) {
    $this->class_start = $startclass;
    echo 'Schedule Available: ' .$this->class_start;

  }


//Getter
  public function getId() {
    return $this->id;
  }

  public function getFname() {
    return $this->fname;
  }

  public function getLname() {
    return $this->lname;
  }

  public function getImage() {
    return $this->image;
  }

  public function getProgramId() {
    return $this->program_Id;
  }

  public function getLevel() {
    return $this->level;
  }

  public function getGender() {
    return $this->level;
  }

  public function getCreated() {
    return $this->created_at;
  }

  public function getUpdated() {
    return $this->updated_at;
  }

  public function getClassStarted() {
    return $this->class_start;
    echo 'Schedule Not Available: ' .$this->class_start;

  }
}

 
 
 

?>