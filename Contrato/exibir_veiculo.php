<?php


require_once 'autoload.php';

use Classes\Veiculo;
use Classes\Carro;
use Classes\Moto;

// Pega os valores de cada campo

$nome = $_POST['nome'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo']; // 1 - para Carro / 2 - para Moto

// 2ª Etapa - Instanciar um Carro ou um Programador
if ($tipo == 1) {
    $Veiculo = new Carro($nome, $marca, $modelo);
} else {
    $Veiculo = new Moto($nome, $marca, $modelo);
}

$Veiculo->obsVeiculo();