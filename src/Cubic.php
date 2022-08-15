<?php

include 'ThreeDimensionalShapeInterface.php';

class Cubic implements ShapeInterface, ThreeDimensionalShapeInterface, ManageShapeInterface
{
    private int $height;
    private int $width;
    private int $length;
    public static int $faces = 6;

    public function __construct(int $height, int $width, int $length)
    {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function area():int
    {
        return ($this->length * 2) * self::$faces;
    }

    public function volume():int
    {
        return $this->height * $this->length * $this->width;
    }

    public function calculate():string
    {
        return 'The area of cubic is: ' . $this->area();
    }
}