<?php

    include 'nome.php';


    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    
    echo "<br><pre>";

    var_dump($nome, $idade);


    $dados = new nome();
    $dados->nome = $nome;
    $dados->idade = $idade;


    var_dump($dados);




?>