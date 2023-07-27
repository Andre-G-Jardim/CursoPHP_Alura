<?php 

    require_once 'autoload.php';

    //Não precisa fazer o require_once aplicando a função de spl_autoload_register();
    //require_once 'src/Modelo/Conta/Conta.php';
    //require_once 'src/Modelo/Pessoa.php';
    //require_once 'src/Modelo/Conta/Titular.php';
    //require_once 'src/Modelo/CPF.php';
    //require_once 'src/Modelo/Endereco.php';
    //require_once 'src/Modelo/Funcionario.php';

    use Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente, Titular};
    use Alura\Banco\Modelo\{CPF, Endereco};

    //Criando conta 1
    $nome = 'André Jardim';
    $cpf = new CPF('000.000.000-03');
    $endereco = new Endereco('Porto Alegre', 'Petrópolis', 'Mário Leitão', 'XX');
    $titular = new Titular($nome, $cpf, $endereco);
    $conta_1 = new ContaCorrente($titular);

    $conta_1->depositar(1000);
    $conta_1->sacar(1000);

    echo PHP_EOL . "\t<DADOS CONTA 1>" . PHP_EOL;
    echo 'Nome: ' . $conta_1->getTitular()->getNome() . PHP_EOL;
    echo 'CPF: ' . $conta_1->getTitular()->getCPF() . PHP_EOL;
    echo 'Endereço: ' . $conta_1->getTitular()->getEndereco()->getEndereco() . PHP_EOL;
    // OU (devido ao metodo __toString)
    //echo 'Endereço: ' . $conta_1->getTitular()->getEndereco() . PHP_EOL;
    echo 'Saldo: ' . $conta_1->getSaldo() . PHP_EOL;

    //Criando conta 2
    $nome = 'Fernanda Cunha';
    $cpf = new CPF('000.000.000-04');
    $endereco = new Endereco('Guaíba', 'Alegria', 'Projetada Spagiary', 'XX');
    $titular = new Titular($nome, $cpf, $endereco);
    $conta_2 = new ContaPoupanca($titular);

    $conta_2->depositar(-1000);
    //$conta_2->sacar(500);

    echo PHP_EOL . "\t<DADOS CONTA 2>" . PHP_EOL;
    echo 'Nome: ' . $conta_2->getTitular()->getNome() . PHP_EOL;
    echo 'CPF: ' . $conta_2->getTitular()->getCPF() . PHP_EOL;
    echo 'Endereço: ' . $conta_2->getTitular()->getEndereco() . PHP_EOL;
    echo 'Saldo: ' . $conta_2->getSaldo() . PHP_EOL;
    
    echo PHP_EOL . "Temos: " . Conta::getNumeroContas() . " Contas" . PHP_EOL;

    //Transação
    echo PHP_EOL . "\t<TRANASÇÂO 1->2>" . PHP_EOL;
    $conta_1->transferir('100', $conta_2);
    echo 'Saldo Conta 1: ' . $conta_1->getSaldo() . PHP_EOL;
    echo 'Saldo Conta 2: ' . $conta_2->getSaldo() . PHP_EOL;
    echo PHP_EOL;
    
?>