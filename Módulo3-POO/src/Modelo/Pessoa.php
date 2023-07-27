<?php 

    namespace Alura\Banco\Modelo;

    abstract class Pessoa
    {

        protected $nome;
        private CPF $cpf;

        public function __construct(string $nome, CPF $cpf)
        {
            $this->validarNome($nome);
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
        
        public function getNome(): string
        {
            return $this->nome;
        }

        public function getCPF(): string
        {
            return $this->cpf->getCPF();
        }

        final protected function validarNome(string $nome){
            if (strlen($nome) < 3){
                echo 'Nome precisa ter ao menos 3 caracteres';
                exit();
            }
        }
    }
?>