<?php

require_once "Triangle.php";
require_once "Rectangle.php";

$triangle = new Triangle(10,5);
$rectangle = new Rectangle(10,5);

echo "Area of the triangle: " . $triangle->calculateArea() . "\n";
echo "<br>";
echo "Area of the rectangle: " . $rectangle->calculateArea() . "\n";

?>