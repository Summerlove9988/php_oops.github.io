<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle</title>
</head>

<body>

    <h2>Area and Circumference of a circle</h2>

    <form action="circle.php" method="post">
        <p>Enter the radius of circle</P>
        <input type="text" name="radius">
        <input type="submit" name="calc" value="Calculate">
    </form>

    <?php

    if (isset($_POST['calc'])) {
        class circle
        {
            private $pi;
            private $r;

            public function __construct($r)
            {
                $this->pi = 3.14;
                $this->r = $r;
            }

            function get_area()
            {
                return $area = $this->pi * $this->r * $this->r;
            }
            function get_circum()
            {
                return $circum = 2 * $this->pi * $this->r;
            }
        }

        $r = $_POST['radius'];
        $a = new circle($r);
        echo "<br>";
        echo "The area of the circle is " . $a->get_area() . " and the circumference is " . $a->get_circum();

    }

    ?>

</body>

</html>