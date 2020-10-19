<?php

include_once ('Rectangle.php');
class Square extends Rectangle
{
public function __construct($name, $width)
{
    parent::__construct($name,$width, $width);
}
public function calculateArea()
{
    return $this->width*4;
}
public function calculatePerimeter()
{
    return $this->width*$this->width;

}
}