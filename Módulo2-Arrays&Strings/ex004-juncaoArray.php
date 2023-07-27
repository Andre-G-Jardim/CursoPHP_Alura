<?php

    //UNE OS ARRAYS RENOMEANDOS AS CHAVES/ÍNDICES
    //SOMA SOMENTE OS ÌNDICES AINDA NÂO OCORRIDOS NA PRIMEIRA LISTA
    //DESEMPACOTANDO EM UM ARRAY

    $alunos2021 = ['Andre','Fernanda'];
    $alunos2022 = ['Mário', 'Rita', 'Alexa'];
    $alunosNovos = ['Rodrigo', 'Alexa', 'Fernanda'];

    //UNE OS ARRAYS RENOMEANDOS AS CHAVES/ÍNDICES
    echo PHP_EOL."array_merge()";
    $alunos = array_merge($alunos2021, $alunos2022, $alunosNovos);
    var_dump($alunos);

    //SOMA SOMENTE OS ÌNDICES AINDA NÂO OCORRIDOS NA PRIMEIRA LISTA
    echo PHP_EOL."soma (+)";
    $alunos = $alunos2021 + $alunos2022;
    var_dump($alunos);

    //DESEMPACOTANDO EM UM ARRAY
    echo PHP_EOL."desempacota (...)";
    $alunos = [...$alunos2021, ...$alunos2022, ...$alunosNovos];
    var_dump($alunos);

?>