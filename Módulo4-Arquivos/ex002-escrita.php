<?php 

    //Sobrescrevendo desde o início do arquivo
    $arquivo = fopen('cursos-php.txt', 'w');
    $curso = '1 algum curso de PHP';
    fwrite($arquivo, $curso);
    fclose($arquivo);

    //Escrevendo no final do arquivo
    $arquivo = fopen('cursos-php.txt', 'a');
    $curso = "\n2 algum outro curso de PHP";
    fwrite($arquivo, $curso);
    fclose($arquivo);

?> 