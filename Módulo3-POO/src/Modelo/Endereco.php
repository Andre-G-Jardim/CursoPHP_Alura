<?php 

    namespace Alura\Banco\Modelo;

    final class Endereco
    {
        private $cidade;
        private $bairro;
        private $rua;
        private $numero;

        public function __construct(string $cidade, string $bairro, string $rua, string $numero)
        {
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->rua = $rua;
            $this->numero = $numero;
        }

        public function getCidade(): string
        {
            return $this->cidade;
        }

        public function getBairro(): string
        {
            return $this->bairro;
        }

        public function getRua(): string
        {
            return $this->rua;
        }

        public function getNumero(): string
        {
            return $this->numero;
        }

        public function getEndereco():string
        {
            return "$this->cidade, $this->bairro, $this->rua Nº $this->numero";
        }

        public function __toString()
        {
            return "$this->cidade, $this->bairro, $this->rua Nº $this->numero";
        }
    }
?>