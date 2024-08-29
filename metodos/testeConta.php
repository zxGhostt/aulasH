<?php
    include'conta.php';

    //cria um obejeto
    $conta = new conta();

    //chama o metodo de abrir conta
    $conta->abrirConta("123", "Maria da silva", 100);

    //mostrar as infos da conta
    $conta->info();

    //depositar o saldo
    $conta->depositar(200);

    $conta->info();

    //sacar o saldo
    $conta->sacar(150);

    $conta->info();

?>