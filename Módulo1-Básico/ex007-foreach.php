<?php 

    // ARRAYS ASSOCIATIVOS - DICT
    $conta1 = ['Titular'=> 'André Jardim', 'Saldo'=>1000];

    $conta2 = ['Titular'=> 'Pedro Jardim', 'Saldo'=>1000];

    $conta3 = ['Titular'=> 'Fernanda Cunha', 'Saldo'=>1000];

    $contasCorrentes = [$conta1, $conta2, $conta3];

    foreach ($contasCorrentes as $conta){
        echo $conta['Titular']. PHP_EOL;
    }
?>