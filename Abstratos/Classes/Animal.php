<?php

namespace Classes;

abstract class Animal
{

  abstract protected function habitoAlimentar();
  abstract protected function alimento($comida);


  public function imprime()
  {
    print $this->habitoAlimentar();
  }
}
