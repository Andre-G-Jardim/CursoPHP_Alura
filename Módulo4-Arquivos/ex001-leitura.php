<?php 

    

    //Ler o arquivo Linha-a-linha
    echo PHP_EOL . "\t<Ler o arquivo Linha-a-linha>" . PHP_EOL;
    $arquivo = fopen('lista-cursos.txt', 'r');

    while (!feof($arquivo)){
        $curso = fgets($arquivo);
        echo $curso;
    }
    fclose($arquivo);

    //Ler o arquivo completo
    echo PHP_EOL . "\t<Ler o arquivo completo -- 1>" . PHP_EOL;
    $arquivo = fopen('lista-cursos.txt', 'r');
    $tamanhoArquivo = filesize('lista-cursos.txt');
    $cursos = fread($arquivo, $tamanhoArquivo);
    echo $cursos;
    fclose($arquivo);
    //OU
    echo PHP_EOL . "\t<Ler o arquivo completo -- 2>" . PHP_EOL;
    $cursos = file_get_contents('lista-cursos.txt');
    echo $cursos;

    //Ler o arquivo completo sendo cada linha o indice de um array
    echo PHP_EOL . "\t<Ler o arquivo como array por linhas>" . PHP_EOL;
    $cursos = file('lista-cursos.txt');
    echo var_dump($cursos);

    //Acessando API via URL
    $url = 'http://swapi.dev/api/films/4/';
    $cursos = file_get_contents($url);
    echo $cursos;

?>