<?php

namespace Classes;

abstract class Animal
{

  public $come;



  abstract protected function habitoAlimentar();
  abstract protected function alimento($comida);


  public function imprime()
  {
    print $this->habitoAlimentar();
  }
}
