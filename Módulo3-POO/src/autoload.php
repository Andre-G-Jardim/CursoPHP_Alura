<?php 
    spl_autoload_register(function (string $nomeDaClasse){
        $nomeDaClasse = str_replace("Alura\\Banco", 'src', $nomeDaClasse);
        $nomeDaClasse .= '.php';
        //echo $nomeDaClasse;
        
        if (file_exists($nomeDaClasse)){
            require_once $nomeDaClasse;
        } else {
            echo "Caminho Inexistente: $nomeDaClasse" . PHP_EOL;
            exit();
        }
    });
?>