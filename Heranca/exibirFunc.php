<?php

    require_once 'autoload.php';

    use Classes\Funcionario;
    use Classes\Gerente;
    use Classes\Programador;

    // 1ª Etapa - Pegar os valores de cada campo
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $salario = $_POST['salario'];
    $cargo = $_POST['cargo']; // 1 - para gerente / 2 - para programador
    $obs = $_POST['obs'];

    // 2ª Etapa - Instanciar um Gerente ou um Programador
    if($cargo == 1) {
        $funcionario = new Gerente($cpf, $nome, $idade, $salario, $projeto, $obs);
    }
    else {
        $funcionario = new Programador($cpf, $nome, $idade, $salario, $linguagem, $obs);
    }

    // 3ª - Exibir as informações desse funcionário no navegador
    $funcionario->relatorioFunc();
