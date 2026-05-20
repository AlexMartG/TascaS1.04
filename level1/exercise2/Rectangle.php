<?php

require_once "Shape.php";

class Rectangle extends shape {
    public function calculateArea(): float {
        return $this->width * $this->height;
    }
}