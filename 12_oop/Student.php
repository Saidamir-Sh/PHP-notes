<?php
require_once 'Person.php';

class Student extends Person {

    public string $studentID;

   public function __construct($name, $surname, $studentID)
   {
       $this-> age = 18;
       $this->studentID = $studentID;
       parent::__construct($name, $surname);
   }

}

?>