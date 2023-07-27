<?php 

    $meusCursos = file('lista-cursos.txt');
    $outrosCursos = file('cursos-php.txt');

    $arqCSV = fopen('cursos.csv', 'w');

    foreach ($meusCursos as $curso){
        //trim remove a quebra de linha
        $linha = [trim(mb_convert_encoding($curso, 'Windows-1252', 'UTF-8')), 'Yes'];

        //fwrite($arqCSV, implode(',', $linha));
        fputcsv($arqCSV, $linha, ';');
    }

    foreach ($outrosCursos as $curso){
        //trim remove a quebra de linha
        $linha = [trim(mb_convert_encoding($curso, 'Windows-1252', 'UTF-8')), 'No'];

        //fwrite($arqCSV, implode(',', $linha));
        fputcsv($arqCSV, $linha, ';');
    }

    fclose($arqCSV);
?>