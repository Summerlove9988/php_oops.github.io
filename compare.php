<?php
//Write a class called 'Product' with properties like 'name' and 'price'. Implement the 'Comparable' interface to compare products based on their prices.
interface Comparable
{
    public function compare_to($object);
}

class Product implements Comparable
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_price()
    {
        return $this->price;
    }

    public function compare_to($object)
    {
        if ($object instanceof Product) {
            if ($this->price < $object->get_price()) {
                return -1;
            } elseif ($this->price > $object->get_price()) {
                return 1;
            } else {
                return 0;
            }
        } else {
            throw new Exception("Invalid Comparison");
        }
    }
}

$computer = new Product('Computer', 40000);
$laptop = new Product('Laptop', 30000);

$result = $computer->compare_to($laptop);

if ($result < 0) {
    echo $computer->get_name() . " is cheaper than " . $laptop->get_name();
} elseif ($result > 0) {
    echo $computer->get_name() . " is expensive than " . $laptop->get_name();
} else{
    echo $computer->get_name() . " is same as " . $laptop->get_name();
}

?>