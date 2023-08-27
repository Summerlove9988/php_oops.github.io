<?php
// Write a PHP class called 'Student' with properties like 'name', 'age', and 'grade'. Implement a method to display student information.
class Student
{
    private $name;
    private $age;
    private $grade;

    public function __construct($name, $age, $grade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function display_details()
    {
        echo "name =" . $this->name . "<br>";
        echo "age =" . $this->age . "<br>";
        echo "grade =" . $this->grade . "<br>";
    }
}

$s1 = new Student("Ajay", 21, 12);

$s1->display_details();
?>