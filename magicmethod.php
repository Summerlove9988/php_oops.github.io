<?php
//Write a PHP class called 'Person' with properties like 'name' and 'age'. Implement the '__toString()' magic method to display person information.

class Person{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString(){
        return "Name = ".$this->name."<br>"."Age = ".$this->age."<br>";
    }
}

$person1 = new Person('Ajay', 21);
echo $person1;

?>