<?php 

    namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

    class Autenticador
    {
        public function tentaLogin(Autenticavel $autenticavel, string $senha): void
        {
            if ($autenticavel->podeAutenticar($senha)){
                echo PHP_EOL . 'Usuário Autenticado!' . PHP_EOL;
            } else {
                echo PHP_EOL . 'Senha Incorreta' . PHP_EOL;
            }
        }
    }
?>