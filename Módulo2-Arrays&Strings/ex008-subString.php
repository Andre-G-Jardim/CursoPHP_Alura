<?php 

    $nomeSobrenome = 'André Jardim';
    $email = "andrej@ufcspa.edu.br";
    $senha = "áéíóú";

    //Extração de trochos da string
    echo substr($email, 0, 6);
    echo PHP_EOL;
    echo substr($email, 6);
    echo PHP_EOL;

    //Posição de letra na string
    $email = "andre.goncalves.jardim@gmail.com";
    $posiArroba = strpos($email, '@');
    echo substr($email, 0, $posiArroba);
    echo PHP_EOL;
    echo substr($email, $posiArroba);
    echo PHP_EOL;

?>