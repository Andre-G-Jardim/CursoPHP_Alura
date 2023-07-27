<?php 

    namespace Alura\Banco\Modelo\Conta;

    use DomainException;

    class SaldoInsuficienteException extends DomainException
    {
        public function __construct(float $saque, float $saldo)
        {
            $mensagem = "Saldo Insuficiente\nVocê tentou sacar $saque (contando a taxa), mas tem apenas $saldo na sua conta.";
            parent::__construct($mensagem);
        }
    }

?>