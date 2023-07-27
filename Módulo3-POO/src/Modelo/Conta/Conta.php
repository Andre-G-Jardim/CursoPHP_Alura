<?php 

    namespace Alura\Banco\Modelo\Conta;
    
    use Alura\Banco\Modelo\Pessoa;
    use Alura\Banco\Modelo\Endereco;
use InvalidArgumentException;

    abstract class Conta
    {
        private $titular;
        protected $saldo;
        private static $numeroContas = 0;

        public function __construct(Titular $titular)
        {
            $this->titular = $titular;
            $this->saldo = 0;

            Conta::$numeroContas++;
            //echo 'Conta Criada!' . PHP_EOL;
        }

        public function __destruct()
        {
            if (self::$numeroContas > 2){
                echo "há mais de uma conta ativa";
            }
        }

        public function sacar(float $valorSaque): void
        {
           
            $valorSaque = $valorSaque * (1 + $this->percentualTarifa());
            
            if ($valorSaque > $this->saldo) {
                try {
                    throw new SaldoInsuficienteException($valorSaque, $this->saldo);
                } catch (SaldoInsuficienteException $exception) {
                    echo $exception->getMessage();
                }
            } else {
                $this->saldo = $this->saldo - $valorSaque;
            }
            
        }

        public function depositar(float $valorDeposito): void
        {
            if ($valorDeposito < 0){
                try {
                    echo 'É preciso um valor positivo para fazer o depósito';
                    throw new InvalidArgumentException();
                } catch (InvalidArgumentException $exception){
                    echo "Valor a depositar precisa ser positivo";
                }
            } else {
                $this->saldo = $this->saldo + $valorDeposito;
            }
            
        }

        public function getSaldo(): float
        {
            return $this->saldo;
        }

        public function getTitular(): Titular
        {
            return $this->titular;
        }

        public static function getNumeroContas(): string
        {
            return self::$numeroContas;
        }

        abstract protected function percentualTarifa(): float;
        
    }
?>