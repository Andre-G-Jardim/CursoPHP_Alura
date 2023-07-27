<?php 
    $idade = 23;
    $nPessoas = 2;

    echo "Você tem ".$idade." anos.".PHP_EOL;

    if ($idade >= 18){
        echo "Entrada Permitida";
    } else if ($idade >= 14 && $nPessoas > 1){
            echo "Entrada Permitida com responsabilidade de seu acopanhante. ";
        } else {
            echo "Entrada Negada";
    }
?>