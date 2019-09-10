<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";
$shape[0] = new Circle('Circle', 5);
$shape[1] = new Rectangle('Rectangle', 5, 7);
$shape[2] = new Square('Square', 5);
foreach ($shape as $value) {
    if ($value instanceof Circle) {
        echo "Circle area is: " . $value->getArea()."<br>";
    } elseif ($value instanceof Rectangle) {
        echo "Rectangle area is: ". $value->getArea()."<br>";
    }elseif ($value instanceof Square){
        echo "Square are is: " . $value->getArea()."<br>";
        echo "color is: ". $value->howToColor();
    }
}

