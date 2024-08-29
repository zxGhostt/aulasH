<?php
    include 'Paciente.php';

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    $paciente = new Paciente();

    $paciente->dadosPaciente($nome, $idade);

    $paciente->inf();

?>