<?php

require_once 'autoload.php';

use Classes\Animal;
use Classes\Carnivoro;
use Classes\Herbivoro;


$classe1 = new Carnivoro;
$classe1->imprime();
echo $classe1->alimento(' come: ') ."\n"."<br/>"."<br/>";;


$classe2 = new Herbivoro();
$classe2->imprime();
echo $classe2->alimento(' come: ') ."\n"."<br/>";