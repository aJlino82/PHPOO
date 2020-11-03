<?php

namespace Classes;


class Herbivoro extends Animal
{
    protected function habitoAlimentar()
    {
        return "Herbívoro";
    }


    public function alimento($comida)
    {
        return "{$comida}Legumes!";
    }

}

