<?php

class SecondClass {

    /*
    Properties are variables internal to the class
    Visibility by default is public
    */
    public $param1; // empty property
    public $param2 = "coucou"; // property with a default value
    public int $param3;  // property with specified type
    public int|float $param4; // property multi-type - int or float
    public ?string $param5; // property multi-type - null or string

    /*
    Constants are non mutable variables which must be initialised with their value. Use UPPER_SNAKE_CASE
    Visibility by default is public
    */
     const CONSTANT_1 = "public constant 1";
     const CONSTANT_2 = 4;

    /*
    Methods
    Functions with varying visibilities
    Default view is public
    Use camelCase for naming
    */

    function bonjourLesAmis() {
        echo "Hello Everybody"; // bad practice better to use a return, otherwise this is a procedure (name given to a function without return)
    }

// getter => returns the contents of a parameter (which generally are not public)

public function getParam2() : string 
{
    return $this->param2;
}

}

