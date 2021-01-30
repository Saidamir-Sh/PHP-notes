<?php
require_once 'Person.php';
require_once 'Student.php';

$student = new Student('Brad', 'Smith', 52491);    
// What is class and instance
// class Person {
//     public $name;
//     public $surname;
//     private $age;
//     public static $counter = 0; // static methods and properties is not belong to classes instance, it is only belong to class itself

//     public function __construct($name, $surname)
//     {
//         echo $name.' '.$surname.'<br>';
//         $this->name = $name;
//         $this->surname = $surname;

//         self::$counter++;
//     }
//     public function setAge ($age) { //>> setter
//         $this->age = $age;
//     }
//     public function getAge() {
//         return $this->age;
//     }
//     public static function getCounter() {
//         return self::$counter;
//     }
// }

$p = new Person('Brad', 'Traversy');
$p->setAge(30); // setter and getters 
echo $p->getAge().'<br>'; // >> getter  

$p2 = new Person('Jhon', 'Smith');

 echo '<pre>';
var_dump($student);
 echo '</pre>';

echo Person::$counter;

// Create Person class in Person.php


// Create instance of Person


// Using setter and getter

/*-/-/-/-/-/-/-/-/-/-/-/-/   OOP w3school  -/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/ */
// class is a template for objects, and an object is an instance of a class.

// class Fruit {
//     // Properties
//     public $name;
//     public $color;
  
//     // Methods
//     function set_name($name) {
//       $this->name = $name;
//     }
//     function get_name() {
//       return $this->name;
//     }
//   }
  
//   $apple = new Fruit();
//   $banana = new Fruit();
//   $apple->set_name('Apple');
//   $banana->set_name('Banana');
  
//   echo $apple->get_name();
//   echo "<br>";
//   echo $banana->get_name();


//PHP - instanceof
// $apple = new Fruit();
// var_dump($apple instanceof Fruit); //>> instanceof>> checks the object whether it is belong to specific class

// destructor
//>> A destructor is called when the object is destructed or the script is stopped or exited
class Fruit {
    public $name;
    public $color;
  
    function __construct($name) {
      $this->name = $name;
    }
    function __destruct() {
      echo "The fruit is {$this->name}.";
    }
  }
  
  $apple = new Fruit("Apple");
  // As constructors and destructors helps reducing the amount of code, they are very useful!

  // ACCESS MODIFIERS

  /*
  
    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class

  */

  class Fruit1 {
    final public function intro() { // cant override because of final keyword
      // some code
    }
  }
  
  class Strawberry extends Fruit {
    // will result in error
    public function intro() {
      // some code
    }
  }

  //PHP Constants
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();

  //PHP OOP - Abstract Classes

  /*
  Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks. An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
  */
  // Parent class

abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
  }
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";
  
  $citroen = new citroen("Citroen");
  echo $citroen->intro();

  // PHP interfaces
  /*
  PHP - What are Interfaces?

Interfaces allow you to specify what methods a class should implement.
Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
  */

  interface InterfaceName {
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3() : string;
  }
/// Example
  interface Animal {
    public function makeSound();
  }
  
  class Cat implements Animal {
    public function makeSound() {
      echo "Meow";
    }
  }
  
  $animal = new Cat();
  $animal->makeSound();
  

  /*
PHP - What are Traits?
PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
Traits are declared with the trait keyword:
  */
// SYNTAX :
  trait TraitName {
    // some code...
  }

  //To use a trait in a class, use the use keyword:
  class MyClass {
    use TraitName;
  }

  trait message1 {
    public function msg1() {
        echo "OOP is fun! ";
      }
    }
    
    class Welcome {
      use message1;
    }
    
    $obj = new Welcome();
    $obj->msg1();

    //PHP OOP - Static Methods

    /*
PHP - Static Methods
Static methods can be called directly - without creating an instance of the class first.
Static methods are declared with the static keyword:
    */

    class ClassName {
        public static function staticMethod() {
          echo "Hello World!";
        }
      }

      //To access a static method use the class name, double colon (::), and the method name:

      class greeting {
        public static function welcome() {
          echo "Hello World!";
        }
      }
      
      // Call static method
      greeting::welcome();

      class domain {
        protected static function getWebsiteName() {
          return "W3Schools.com";
        }
      }
      
      class domainW3 extends domain {
        public $websiteName;
        public function __construct() {
          $this->websiteName = parent::getWebsiteName();
        }
      }
      
      $domainW3 = new domainW3;
      echo $domainW3 -> websiteName;

      //PHP OOP - Static Properties

      /*
PHP - Static Properties
Static properties can be called directly - without creating an instance of a class.
Static properties are declared with the static keyword:
      */
    //   class pi {
    //     public static $value=3.14159;
    //     public function staticValue() {
    //       return self::$value;
    //     }
    //   }
      
    //   $pi = new pi();
    //   echo $pi->staticValue(); 

      class pi {
        public static $value=3.14159;
      }
      
      class x extends pi {
        public function xStatic() {
          return parent::$value;
        }
      }
      
      // Get value of static property directly via child class
      echo x::$value;
      
      // or get value of static property via xStatic() method
      $x = new x();
      echo $x->xStatic(); 


      //PHP Namespaces
      /*
      Namespaces are qualifiers that solve two different problems:
    They allow for better organization by grouping classes that work together to perform a task
    They allow the same name to be used for more than one class
For example, you may have a set of classes which describe an HTML table, such as Table, Row and Cell while also having another set of classes to describe furniture, such as Table, Chair and Bed. Namespaces can be used to organize the classes into two different groups while also preventing the two classes Table and Table from being mixed up.
      */

      // syntax: namespaces should be decalred at the top of the php file
      namespace Html;

      namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;

//Use classes from the Html namespace:

$table = new Html\Table()
$row = new Html\Row(); 