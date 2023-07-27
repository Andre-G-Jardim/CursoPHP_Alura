<?php 
    require_once 'MeuFiltro.php';

    $arquivo = fopen("lista-cursos.txt", "r");

    //Aplicando um filtro
    stream_filter_append($arquivo, 'string.toupper');

    $cursos = fread($arquivo, filesize('lista-cursos.txt'));
    //echo $cursos;

    //Aplicando outro filtro
    stream_filter_register('separa.parte', MeuFiltro::class);
    $arquivo = fopen("lista-cursos.txt", "r");
    stream_filter_append($arquivo, 'separa.parte');
    $cursos = fread($arquivo, filesize('lista-cursos.txt'));
    echo $cursos;

?>