<?php 

    $arquivo = new SplFileObject('cursos.csv');

    foreach ($arquivo as $linha) {
        echo mb_convert_encoding($linha, 'UTF-8', 'Windows-1252');
    }

    $date = new DateTime();
    $date->setTimestamp($arquivo->getCTime());

    echo $date->format('d/m/Y') . PHP_EOL;
?>