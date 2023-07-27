<?php 
    $texto = "texto ... caramba ... poxa ... texto";

    //substituindo palavras
    echo "\t<substituindo palavras>" . PHP_EOL;
    echo str_replace(['poxa', 'caramba'],'***', $texto) . PHP_EOL;
    echo str_replace(['poxa', 'caramba'],['p***', 'c***'], $texto) . PHP_EOL;

    //substituindo caracteres
    echo "\t<substituindo caracteres>" . PHP_EOL;
    echo strtr($texto, 'texto', 'AEIOU') . PHP_EOL;
    echo strtr($texto, ['poxa'=> 'p**2', 'caramba'=> 'c**2']) . PHP_EOL;


?>