<?php

require 'ShapeInterface.php';
require 'ManageShapeInterface.php';

class Circle implements ShapeInterface, ManageShapeInterface
{
    public int $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function calculate():float
    {
        return $this->area();
    }

    public function area():float{
        return pi() * pow($this->radius,2);
    }
}