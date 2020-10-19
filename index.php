<?php
include_once('Rectangle.php');
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Square.php');
$rectangle= new Rectangle('Rectangle',1,3);
echo 'CalculateArea rectangle: '.$rectangle->calculateArea() .'<br>'.'CalculatePerimeter rectangle: '.$rectangle->calculatePerimeter().'<br>';
$circle=new Circle('Circle',5);
echo 'CalculateArea circle:'.$circle->calculateArea().'<br>'.'CalculatePerimeter circle:'.$circle->calculatePerimeter().'<br>';
$cylinder=new Cylinder('Cylinder',7,8);
echo 'CalculateArea cylinder:'.$cylinder->calculateArea().'<br>'.'CalculatePerimeter cylinder:'.$cylinder->calculatePerimeter().'<br>';
$square= new  Square('Square',12);
echo 'CalculateArea square:'.$square->calculateArea().'<br>'.'CalculatePerimeter square: '.$square->calculatePerimeter();