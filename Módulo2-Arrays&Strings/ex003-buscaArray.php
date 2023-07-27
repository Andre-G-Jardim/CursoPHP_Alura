<?php 

    // Verifica se um array é numérico e sem pulo de índex;
    // Verifica se o valor não é nulo em determinada chave;
    // Verifica se existe determinada chave;
    // Verifica a existência de um valor, idependente da chave;
    // Busca a chave de um determinado valor;

    $notas = ['Andre' => null, 'Fernanda' => 10, 'Pedro' => 9];

    //VERIFICAR SE O VALOR NÂO É NULO EM DETERMINADA CHAVE
    echo "\t<Verifica se há valor na chave>" . PHP_EOL;
    echo "André fez a prova? ";
    var_dump(isset($notas['Andre']));

    //VERIFICAR SE EXISTE DETERMINADA CHAVE
    echo PHP_EOL . "\t<Verifica se há  chave>" . PHP_EOL;
    echo "Mário é aluno? ";
    var_dump(array_key_exists('Mario', $notas));
    

    //VERIFICAR A EXISTE DE UM VALOR IDEPENDENTE DA CHAVE
    echo PHP_EOL . "\t<Verifica se há  valor>" . PHP_EOL;
    echo "Alguém tirou nota 10? ";
    var_dump(in_array(2, $notas));

    //BUSCAR A CHAVE DE UM DETERMINADO VALOR
    echo PHP_EOL . "\t<Verifica chave de valor>" . PHP_EOL;
    echo "Quem tirou 10?" . array_search(10, $notas) . PHP_EOL;
    echo PHP_EOL;

    //Verifica a diferença de VALORES entre duas listas
    echo "\t<Diferença entre VALORES de listas>" . PHP_EOL . PHP_EOL;
    $lis_1 = ['um'=>1, 'dois'=>2, 'tres'=>3];
    $lis_2 = ['um'=>1, 'dois'=>2, 'tres'=>3, 'quatro'=>4];
    echo "--> Valores que tem na LISTA 1 e não tem na LISTA 2" . PHP_EOL;
    var_dump(array_diff($lis_1, $lis_2));
    echo "--> Valores que tem na LISTA 2 e não tem na LISTA 1" . PHP_EOL;
    var_dump(array_diff($lis_2, $lis_1));

    //Verifica a diferença de VALORES entre duas listas
    echo "\t<Diferença entre CHAVES de listas>" . PHP_EOL . PHP_EOL;
    echo "--> chaves que tem na LISTA 1 e não tem na LISTA 2" . PHP_EOL;
    var_dump(array_diff_key($lis_1, $lis_2));
    echo "--> chaves que tem na LISTA 2 e não tem na LISTA 1" . PHP_EOL;
    var_dump(array_diff_key($lis_2, $lis_1));
?>