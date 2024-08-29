<?php

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];

    echo "<br><pre>";

    var_dump($nome, $idade, $cpf);

    include 'Pessoa.php';

    $p1 = new Pessoa();

    $p1->nome = $nome ;
    $p1->idade = $idade;
    $p1->cpf = $cpf;

    var_dump($p1);

?>