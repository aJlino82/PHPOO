<?php

//1a e 2a etapa - Concexao com um sgbd a partir de uma base de dados especifica
$servidor = new PDO('mysql:host=localhost;dbname=sistema', 'root', '1234');

//3a etapa Executar uma consulta a partir de um objeto PDO
//insert, update, delete.
$consultaPrep = $servidor->prepare("INSERT INTO  cadastro (nome) VALUES (:nomeNovo)");
$consultaPrep->bindParam(':nomeNovo', $nome);

$nome = "Carlinhos Bala";
$consultaPrep->execute();
$nome = "Magrão";
$consultaPrep->execute();


$servidor = null;