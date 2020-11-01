<?php


$id = $_GET['id'];

//1a e 2a etapa - Concexao com um sgbd a partir de uma base de dados especifica
$servidor = new PDO('mysql:host=localhost;dbname=livros', 'root', '');


$servidor->exec("DELETE from famosos where id = $id");


$servidor = null;

header("location: exemploSelect.php");

