<?php 
class Course {
  protected $id;
  protected $name; 
  protected $number;
  protected $description;
  protected $created_at;
  protected $updated_at;
  protected $avalaibility;
  protected $type; //design or devlopment

  public function __construct($id, $name, $number, $descript, $created, $updated, $avalaible, $type) {
    $this->id = $id;
    $this->name = $name;
    $this->number = $number;
    $this->description = $descript;
    $this->created_at = $created;
    $this->updated_at = $updated;
    $this->avalaibility = $avalaible;
    $this->type = $type;
  }

//Setter
  public function setId($id) {
    $this->id = $id;
  }

  public function setCname($name) {
    $this->name = $name;
  }
  
  public function setCnumber($number) {
    $this->number = $number;
  }

  public function setCdescript($descript) {
    $this->description = $descript;
  }

  public function setCreated($created) {
    $this->created_at = $created;
  }

  public function setUpdated($updated) {
    $this->updated_at = $updated;
  }

  public function setAvalaible($avalaible) {
    $this->avalaibility = $avalaible;
  }

  public function setType($type) {
    $this->type = $type;
  }




//Getter
  public function getId() {
    return $this->id;
  }

  public function getCname() {
    return $this->name;
  }
  
  public function getCnumber() {
    return $this->number;
  }

  public function getCdescript() {
    return $this->description;
  }

  public function getCreated() {
    return $this->created_at;
  }

  public function getUpdated() {
    return $this->updated_at;
  }

  public function getAvalaible() {
    return $this->avalaibility;
  }

  public function getType($type) {
    return $this->type;
  }

 
}
 

?>