<?php

class AreaCalculator
{
    protected array $shapes;

    public function __construct(array $shapes = [])
    {
        $this->shapes = $shapes;
    }

    /**
     * @throws Exception
     */
    public function sum():float{
        foreach ($this->shapes as $shape) {
            if (is_a($shape, 'ManageShapeInterface')) {  // if $shape is a instance of the ManageShapeInterface
            $area[] = $shape->calculate();
            continue;
        }
            throw new Exception('Invalid shape provided');
        }
        return array_sum($area); // array_sum — Calculate the sum of values in an array
    }

//    public function output():string{
//        return implode('', [  //The implode() function takes an array, joins it with the given string, and returns the joined string.
//            '',
//            'Sum of the areas of provided shapes: ',
//            $this->sum(), // this means the sum method inside this class
//            '',
//        ]);
//    }

// VIOLATES THE SINGLE RESPONSIBILITY PRINCIPLE

}