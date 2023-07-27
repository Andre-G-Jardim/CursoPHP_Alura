<?php 

    $nome = 'Andrá Jardim';
    $url = 'https://blablabla.com.br';

    //Verificar se contém um uma determinada sequencia/palavra em uma string
    var_dump(str_contains($nome, 'Jardim'));

    //Verificar se COMEÇA com uma determinada sequencia/palavra em uma string
    var_dump(str_starts_with($url, 'https://'));

    //Verificar se TERMINA com uma determinada sequencia/palavra em uma string
    var_dump(str_ends_with($url, '.br'));

    //Manipular pedaços de STRINGS
    

?>