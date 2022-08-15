<?php

class Square implements ShapeInterface, ManageShapeInterface
{
    public int $length;

    public function __construct(int $length)
    {
        $this->length = $length;
    }

    public function calculate():int
    {
        return $this->area();
    }

    public function area():int{
        return pow($this->length,2);
    }
}

