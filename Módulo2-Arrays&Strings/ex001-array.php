<?php 

    //Seu índice pode ser NUMÉRICO
    //automático ou manualmente definido
    $array_1 = [
        'um', 'dois', 'tres'
    ];

    $array_2 = [
        0 => 'um',
        1 => 'dois',
        2 => 'tres'
    ];

    //Seu índice pode ser STRING
    //manualmente definido
    $array_3 = [
        'zero' => 'um',
        'um' => 'dois',
        'dois' => 'tres'
    ];


    //MANIPUANDO OS ARRAYS

    //percorrendo o array
    echo PHP_EOL . "\t<Percorrendo somente os valores>" . PHP_EOL;
    
    foreach ($array_3 as $value) {
        echo 'Valor: ' . $value . PHP_EOL;
    };

    echo PHP_EOL . "\t<Percorrendo chave e valor>" . PHP_EOL;
    foreach ($array_3 as $key => $value) {
        echo 'Chave: ' . $key . ' | Valor: ' . $value . PHP_EOL;
    };

    //Tamanho array
    echo PHP_EOL . "\t<Tamanho do Array: " . count($array_3) . ">";

    
?>