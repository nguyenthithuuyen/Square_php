<?php

include_once('Circle.php');

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $height, $radius)
    {
        $this->height = $height;
        parent::__construct($name, $radius);
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;

    }
}