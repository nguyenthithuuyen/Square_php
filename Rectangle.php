<?php

include_once ('Shape.php');
class Rectangle extends Shape
{
public $width;
public $height;
public function __construct($name,$height,$width)
{
    $this->height=$height;
    $this->width=$width;
    parent::__construct($name);
}
public function calculateArea(){
    return $this->height*$this->width;
}
public function calculatePerimeter(){
    return ($this->width+$this->height)*2;
}
}