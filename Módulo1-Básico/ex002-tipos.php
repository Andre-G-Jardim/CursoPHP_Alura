<?php 
//Tipos primitivos
    //int
    $inteiro = 21;
    echo "Numero inteiro: $inteiro".PHP_EOL;

    //float - double
    $decimais = 10/3;
    echo "Numero float: $decimais".PHP_EOL;

    //String
    $texto = "Andre";
    echo "String: $texto".PHP_EOL;

    //Boolean
    $bool = true;
    echo "Boleanos: $bool".PHP_EOL;

//ARRAYS
    $array_vetor = [0, [1.0, 1.5], 2, 3, 4];
    echo "Algum valor do array: ". $array_vetor[1][1];

    echo PHP_EOL;
    echo PHP_EOL;
    
//Descobrir o tipo de varivel
    echo "Tipo: " . var_dump($inteiro). PHP_EOL;
    echo "Tipo: " . var_dump($decimais). PHP_EOL;
    echo "Tipo: " . var_dump($texto). PHP_EOL;
    echo "Tipo: " . var_dump($bool). PHP_EOL;
    echo "Tipo: " . var_dump($array_vetor). PHP_EOL;
    

?>