<?php
class shape {
    public float $width;
    public float $height;

    public function __construct(float $width, float $height){
        $this->width = $width;
        $this->height = $height;    

    }
    
}
class Triangle extends shape {
    public function calculateArea(): float {
        return ($this->width * $this->height) / 2;
    }
}
class Rectangle extends shape {
    public function calculateArea(): float {
        return $this->width * $this->height;
    }
}
$triangle = new Triangle(10, 5);
echo "Area of the triangle: " . $triangle->calculateArea() . "\n";
echo "<br>";
$rectangle = new Rectangle(10, 5);
echo "Area of the rectangle: " . $rectangle->calculateArea() . "\n";
?>