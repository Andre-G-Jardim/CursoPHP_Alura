<?php 
    //Comandos de impressão
    echo "Olá Mundo!".PHP_EOL;
    print "\tOlá Mundo!\n";
    echo "\t\tOlá Mundo!".PHP_EOL;
    print "\t\t\tOlá Mundo!\n";
    echo "\t\t\t\tOlá Mundo!".PHP_EOL;

// DIFRENÇA ENTRE AS ASPAS 
    // Duplas""(interpreta)
    echo "Olá mundo! \u{1F30E}".PHP_EOL;

    //Simples''(Não interpreta)
    echo 'Olá mundo! \u{1F30E}'.PHP_EOL;

    //imprimendo aspas
    $nom = "Rodrigo";
    $sNom = "Nogueira";
    echo "$nom \"Minotauro\" $sNom";
?>