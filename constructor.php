<?php

    class car{
        public $name;
        public $color;

        function __construct($name){
            $this -> name = $name;
        }
        
        function get_name(){
            echo $this -> name;
        }
    }

    $audi = new car('Audi');
    $audi -> color = 'Navy Blue';

    $audi -> get_name();
    echo '<br>';
    echo $audi -> color;

?>
