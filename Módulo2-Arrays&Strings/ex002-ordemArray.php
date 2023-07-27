<?php 

    // Ordenação crescente;
    // Ordenação decrescente;
    // Ordenação por Sub-item;
    // Verifica se um array é numérico e sem pulo de índex;
    // Verifica se o valor não é nulo em determinada chave;
    // Verifica se existe determinada chave;
    // Verifica a existência de um valor, idependente da chave;
    // Busca a chave de um determinado valor;

    $notas_1 = [10, 8, 9, 7];

    $notas_2 = [ ['aluno' => 'Maria', 'nota' => 9],
                 ['aluno' => 'Vinícius', 'nota' => 6 ],
                 ['aluno' => 'Fernanda', 'nota' => 10 ]];

    $notas_3 = ['Andre' => null, 'Fernanda' => 10, 'Pedro' => 9];

    //ORDENAÇÂO CRESCENTE
    echo "\t<Ordenação em ordem crescente>" . PHP_EOL;
    sort($notas_1);
    var_dump($notas_1);
    echo PHP_EOL;

    //ORDENAÇÂO DECRESCENTE
    echo "\t<Ordenação em ordem crescente>" . PHP_EOL;
    rsort($notas_1);
    var_dump($notas_1);
    echo PHP_EOL;

    //ORDENAÇÂO DE SUBITEM NO ARRAY
    echo "\t<Ordenação de Sub-Item>" . PHP_EOL;
    function ordenaNotas (array $notaA, array $notaB)
    {
        if ($notaA['nota'] > $notaB['nota']) {
            return -1;
        } elseif ($notaB['nota'] > $notaA['nota']) {
            return 1;
        } else {
            return 0;
        }
    }
    
    usort($notas_2, 'ordenaNotas');
    foreach ($notas_2 as $value){
        echo $value['nota'] . PHP_EOL;
    }
    echo PHP_EOL;

    //VERIFICAR SE É UM ARRAY NUMÉRICO E SUM PULO
    echo "\t<array_is_list>" . PHP_EOL;
    $lis_1 = [1, 2, 3];
    echo var_dump(array_is_list($lis_1)) . PHP_EOL;

    $lis_2 = [0 => 1, 2 => 2, 3 => 3];
    echo var_dump(array_is_list($lis_2)) . PHP_EOL;

?>