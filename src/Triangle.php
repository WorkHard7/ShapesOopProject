<?php

class Triangle implements ShapeInterface
{
    public int $base;
    public int $height;

    public function __construct(int $base, int $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function area():string{

        return 'The area of triangle is: ' . 0.5 * ($this->base * $this->height);
    }
}