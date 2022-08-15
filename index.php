<?php

require './src/SumCalculatorOutputter.php';
require './src/Circle.php';
require './src/Square.php';
require './src/AreaCalculator.php';
require './src/Triangle.php';
require './src/Cubic.php';

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
//    new Cubic(4,2,6),
//    new Triangle(5,3), // will throw an Exception because Tringle is not an instance of ShapeInterface
];

//$triangle = new Triangle(5,3);
//echo $triangle->area();
//echo "\n";

$cubic = new Cubic(4,2,6);
echo $cubic->calculate();
echo "\n";

$areas = new AreaCalculator($shapes); // sends the array of shapes to the AreaCalculator class
$output = new SumCalculatorOutputter($areas);


echo 'JSON format: ' . $output->JSON();
echo "\n";
echo 'HTML format: ' . $output->HTML();

?>