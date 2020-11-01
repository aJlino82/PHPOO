<?php

namespace Classes;

abstract class Figura
{

    protected $x;
    protected $y;


    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /*abstract function __construct()
    {
        
    }
    */
}
