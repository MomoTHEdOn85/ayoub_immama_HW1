<?php

class Program {
  protected $id;
  protected $name;
  protected $description;
  protected $datecreated;
  protected $year;

  public function __construct($id, $name, $descript, $year) {
    $this->id = $id; 
    $this->name = $name; 
    $this->description = $descript; 
    $this->year = $year;
  }



  public function setId($id) {
    if (is_int($id)) {
      $this->id = $id; 
    } else {
      echo 'Invalid Request';
    }
  }

  public function setName($name) {
    if(is_string($name)) {
      $this->name = $name;
    } else {
     echo 'Invalid input, not a name';
    }
    
  }

  public function setDescrip($descript) {
    $this->description = $descript; 
  }

  public function setYear($year) {
    $this->year = $year;
  }



  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name; 
  }

  public function getDescrip() {
    return $this->description;
  }

  public function getYear() {
    return $this->year; 
    echo 'Course Length: '.$this->year;

  }
}
 
 
?>