<?php 

    //ARRAYS - LISTAS - VETORES
    $array_vetor = [0, 1, 2, 3, 4, 5];

    //ADICIONANDO A LISTA
    $array_vetor[count($array_vetor)] = 6;

    echo "Todos valores do array". PHP_EOL;
    for ($i=0; $i<count($array_vetor); $i++){
        echo "$array_vetor[$i]". PHP_EOL;
    }
    echo PHP_EOL;
    echo "Algum valor do array: ". $array_vetor[1] . PHP_EOL;
    echo PHP_EOL;


    // ARRAYS ASSOCIATIVOS - DICT
    $conta1 = ['Titular'=> 'André Jardim', 'Saldo'=>1000];
    echo $conta1['Titular']. PHP_EOL;

    $conta2 = ['Titular'=> 'Pedro Jardim', 'Saldo'=>1000];
    echo $conta2['Titular']. PHP_EOL;

    $conta3 = ['Titular'=> 'Fernanda Cunha', 'Saldo'=>1000];
    echo $conta3['Titular']. PHP_EOL;

    $contasCorrentes = [$conta1, $conta2];

    $contasCorrentes[count($contasCorrentes)] =$conta3;

    echo PHP_EOL;
    for ($i=0; $i<count($contasCorrentes); $i++){
        echo $contasCorrentes[$i]['Titular']. PHP_EOL;
    }

    //ATRIBUINDO A PARTIR DE UM ARRAY
    list($zero, $um, $dois) = $array_vetor;
    echo PHP_EOL;
    echo $zero . PHP_EOL;
    echo $um . PHP_EOL;
    echo $dois . PHP_EOL;

    //REMOVER ÍNDICE
    unset($array_vetor[0]);
    echo $array_vetor[0];

?>