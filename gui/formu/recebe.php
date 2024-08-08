<?php

    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $data = $_POST['dataN'];
    $email = $_POST['email'];

    $disciplinas = $_POST['disc'];
    $estado = $_POST['estado'];
    $cor = $_POST['color'];
    $obs = $_POST['obs'];
    $curso = $_POST['1'];

    echo "<br><pre>";

    var_dump($nome, $senha, $data, $email, $estado, $cor, $obs, $curso);

    print_r($disciplinas);



?>