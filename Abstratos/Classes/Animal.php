<?php

namespace Classes;

abstract class Animal
{
    public $come;

    public function __construct($come)
    {
        $this->come = $come;
    }

    public function habiltoAlimentar()
    {
        
    }




    /**
     * Get the value of come
     */
    public function getCome()
    {
        return $this->come;
    }

    /**
     * Set the value of come
     *
     * @return  self
     */
    public function setCome($come)
    {
        $this->come = $come;

        return $this;
    }
}
