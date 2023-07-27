<?php 

    $dados_1 = ['Andre', 23, 80];
    $dados_2 = ['nome'=>'Fernanda', 'idade'=>24, 'peso'=>60];

    list($nome, $idade, $peso) = $dados_1;
    var_dump($nome, $idade, $peso);

    list('nome'=>$nome, 'idade'=>$idade, 'peso'=>$peso) = $dados_2;
    var_dump($nome, $idade, $peso);

    $dados_3 = compact('nome', 'idade', 'peso');
    var_dump($dados_3);

?>