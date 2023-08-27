<?php

// 4. Write a PHP interface called 'Resizable' with a method 'resize()'. Implement the 'Resizable' interface in a class called 'Square' and add functionality to resize the square.

interface Resizable{
    public function resize($percentage);
}

class Square implements Resizable{
    private $side;

    function __construct($side){
        $this->side = $side;
    }
    public function resize($percentage){
        $this->side = $this->side * ($percentage/100);
    }

    function get_area(){
        return pow($this->side, 2);
    }
}

$square1 = new Square(20);
$square1->resize(60);
echo "The area of the square is ".$square1->get_area();

?>