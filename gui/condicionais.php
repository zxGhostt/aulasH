<?php

    $nome = "Maria";
    $idade = 11;

    if($idade >= 18 && $idade < 70){
        echo "{$nome} vota legal ";
    }else if ($idade >= 13 && $idade <= 17){
        echo "{$nome} não vota legal, adolecente";
    }else if ($idade < 12){
        echo "{$nome} não vota legal, criança";
    }else{
        echo "{$nome} voto facultaivo legal";
    }

?>