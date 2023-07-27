<?php 

    $peso = 56;
    $altura = 1.80;

    $IMC = $peso / ($altura ** 2);
    echo "Seu IMC é de: $IMC" . PHP_EOL;

    if ($IMC > 25){
        echo "Sobrepeso";
    } else if ($IMC > 18.5){
        echo "Peso OK";
    } else {
        echo "Tá raqutico filho";
    }

?>