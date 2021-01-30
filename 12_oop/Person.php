<?php
class Person {
    public string $name;
    public string $surname;
    protected ?int $age;  //>> private     
    //>> cannot accessible from other instances if if use protected then instances of that class can use property
    //>> value is a integer but it also accepts null value in order to not showing an error 
    public static $counter = 0; // static methods and properties is not belong to classes instance, it is only belong to class itself

    public function __construct($name, $surname)
    {
        echo $name.' '.$surname.'<br>';
        $this->name = $name;
        $this->surname = $surname;

        self::$counter++;
    }
    public function setAge ($age) { //>> setter
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
    public static function getCounter() {
        return self::$counter;
    }
}
?>