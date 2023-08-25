<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle</title>
</head>

<body>

    <h2>Area and Perimeter of Rectangle</h2>

    <form action="rectangle-oop.php" method="POST">
        <p>Enter Length</p>
        <input type="number" name="length">
        <p>Enter Breadth</p>
        <input type="number" name="breadth">
        <br>
        <input type="submit" value="Calculate" name="Calc">
    </form>

    <?php

    if (isset($_POST['Calc'])) {
        
        class Rectangle{
            private $l;
            private $b;

            public function __construct($l, $b){
                $this -> l = $l;
                $this -> b = $b;
            }

            function get_area(){
                return $area =  $this -> l * $this -> b;
            }
            function get_perimeter(){
                return $perimeter =  2 * ($this -> l + $this -> b);
            }
        }


        $l = $_POST["length"];
        $b = $_POST["breadth"];

        $a = new Rectangle($l, $b);
        
        echo "The area of rectangle is ".$a->get_area()." and the perimeter is ".$a->get_perimeter();
       
    }

    ?>

</body>

</html>