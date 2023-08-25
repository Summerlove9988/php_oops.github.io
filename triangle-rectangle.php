<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class</title>
</head>

<body>


    <h2>Area of Rectangle and Triangle using Abstract Method</h2>

    <form action="triangle-rectangle.php" method="POST">
        <p>Enter Base (length)</p>
        <input type="text" name="base">
        <p>Enter Height (breadth)</p>
        <input type="text" name="height">
        <br>
        <input type="submit" value="Calculate" name="calc">
    </form>

    <?php

    if (isset($_POST['calc'])) {
        abstract class Shape
        {
            protected $b;
            protected $h;
            protected $area;

            function __construct($b, $h)
            {
                $this->b = $b;
                $this->h = $h;
            }

            abstract function get_area();
        }

        class Triangle extends Shape
        {
            function get_area()
            {
                return $this->area = 1 / 2 * ($this->b * $this->h);
            }
        }

        class Rectangle extends Shape
        {
            function get_area()
            {
                return $this->area = $this->b * $this->h;
            }
        }

        $b = $_POST['base'];
        $h = $_POST['height'];

        echo "<br>";

        $a = new Triangle($b, $h);
        echo "The area of triangle is " . $a->get_area();

        echo "<br>";

        $b = new Rectangle($b, $h);
        echo "The area of rectangle is " . $b->get_area();


    }

    ?>

</body>

</html>