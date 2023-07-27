<?php 

    $nomeSobrenome = '.,André Jardim.,';
    $email = "andre.jardim@ufcspa.edu.br";
    $senha = "áéíóú";

    //Tamanho da String EM BYTES
    echo "\t<Tamanho da String EM BYTES>";
    echo strlen($senha);
    echo PHP_EOL;

    //Tamanho da String
    echo "\t<Tamanho das Strings>";
    echo mb_strlen($senha);
    echo PHP_EOL;

    //Passando para MAIUSCULO
    //retorna uma CÓPIA
    //NÃO mexe nos caracteres acentuados
    echo "\t<Passando para MAIUSCULO>";
    echo strtoupper($senha);
    echo PHP_EOL;

    //Mexe nos caracteres acentuados
    echo "\t<Passando para MAIUSCULO>";
    echo mb_strtoupper($senha);
    echo PHP_EOL;

    //Passando para MINUSCULO
    //retorna uma CÓPIA
    echo "\t<Passando para MINUSCULO>";
    echo strtolower($senha);
    echo PHP_EOL;

    //Separar por algum elemento
    echo "\t<Separar por algum elemento>";
    echo var_dump(explode('.',substr($email, 0, $posiArroba)));
    //
    list($nome, $sobrenome) = explode(' ', $nomeSobrenome);
    echo 'Nome :' . $nome . PHP_EOL;
    echo 'Sobrenome :' . $sobrenome;
    echo PHP_EOL;

    //Juntar array e strings
    echo "\t<Juntar array e strings>";
    $telefones = ["45678945", "78945612", "32165498", "74185296"];
    echo implode(',', $telefones);
    echo implode(PHP_EOL, $telefones);
    echo PHP_EOL;

    //Removendo caracteres no início e no final das STRINGS
    echo "\t<Removendo caracteres no início e no final das STRINGS>";
    echo PHP_EOL;
    echo $nomeSobrenome . PHP_EOL;
    echo trim($nomeSobrenome, '.,');
    echo PHP_EOL;

    //Removendo caracteres SOMENTE NO INÍCIO das STRINGS
    echo "\t<Removendo caracteres SOMENTE NO INÍCIO das STRINGS>";
    echo PHP_EOL;
    echo $nomeSobrenome . PHP_EOL;
    echo ltrim($nomeSobrenome, '.,');
    echo PHP_EOL;

    //Removendo caracteres SOMENTE NO FINAL das STRINGS
    echo "\t<Removendo caracteres SOMENTE NO FINAL das STRINGS>";
    echo PHP_EOL;
    echo $nomeSobrenome . PHP_EOL;
    echo rtrim($nomeSobrenome, '.,');
    echo PHP_EOL;
?>