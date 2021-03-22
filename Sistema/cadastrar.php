<?php


$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];



//1a e 2a etapa - Concexao com um sgbd a partir de uma base de dados especifica
$conn = new PDO('mysql:host=localhost; dbname=sistema', 'root', '1234');

//3a etapa Executar uma consulta a partir de um objeto PDO
//insert, update, delete.

$conn->exec("INSERT INTO cadastro (nome) VALUES ($nome)");















$servidor = null;
