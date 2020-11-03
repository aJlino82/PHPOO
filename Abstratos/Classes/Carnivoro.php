<?php

namespace Classes;


class Carnivoro extends Animal
{
    protected function habitoAlimentar()
    {
        return "Carnívoro";
    }


    public function alimento($comida)
    {
        return "{$comida}Carne!";
    }

}


