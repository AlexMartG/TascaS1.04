<?php
class shape {
    public $width;
    public $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;    

    }
    
}
class Triangle extends shape {
    public function calculateArea() {
        return ($this->width * $this->height) / 2;
    }
}
class Rectangle extends shape {
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

?>