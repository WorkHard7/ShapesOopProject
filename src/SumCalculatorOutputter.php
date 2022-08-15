<?php

class SumCalculatorOutputter
{
    protected AreaCalculator $calculator;

    public function __construct(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function JSON():string  // function for displaying the data in JSON format
    {
        $data = [
            'sum' => $this->calculator->sum(),
        ];
        return json_encode($data);  //json_encode — Returns the JSON representation of a value
    //It is commonly used for transmitting data in web applications (e.g., sending some data from the server to the client, so it can be displayed on a web page, or vice versa).
    }

    public function HTML():string // function for displaying the data in HTML format
    {
        return implode('', [  //The implode() function takes an array, joins it with the given string, and returns the joined string.
            '',
            'Sum of the areas of provided shapes: ',
            $this->calculator->sum(),
            '',
        ]);
    }
}