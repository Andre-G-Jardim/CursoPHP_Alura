<?php 

    namespace Alura\Banco\Modelo\Funcionario;

    use Alura\Banco\Modelo\{Pessoa, CPF};

    abstract class Funcionario extends Pessoa
    {

        private $salario;

        public function __construct(string $nome, CPF $cpf, float $salario)
        {
            parent::__construct($nome, $cpf);
            $this->salario = $salario;
        }

        public function getSalario(): string
        {
            return $this->salario;
        }

        public function recebeAumento(float $valorAumento): void
        {
            if ($valorAumento < 0){
                echo 'Aumento deva ser positivo!!!';
                return;
            } else {
                $this->salario += $valorAumento;
            }
        }

        abstract public function calculaBonificacao(): float;
    }
?>