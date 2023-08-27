<?php
// Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'. Implement a method to display the vehicle details.

class Vehicle
{
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function display_details()
    {
        echo "brand =" . $this->brand . "<br>";
        echo "model =" . $this->model . "<br>";
        echo "year =" . $this->year . "<br>";
    }
}

$car = new Vehicle('Audi', 'A0431', '2023');

$car->display_details();

?>