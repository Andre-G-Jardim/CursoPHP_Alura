<?php 

    $alunos2021 = ['Andre','Fernanda'];
    $alunos2022 = ['Mário', 'Rita', 'Alexa'];
    $alunosNovos = ['Rodrigo', 'Alexa', 'Fernanda'];

    //Adiciona ao final do array
    $alunos2021[] = 'Carla';
    var_dump($alunos2021);

    //Adicionar no início do array
    array_unshift($alunos2021, 'Dalessandro');
    var_dump($alunos2021);

    //Remover o início do array
    echo "Removendo: ". array_shift($alunos2021) . PHP_EOL;
    var_dump($alunos2021);

    //Remover o final do array
    echo "Removendo: ". array_pop($alunos2021) . PHP_EOL;
    var_dump($alunos2021);


?>