<?php 
    require_once 'autoload.php';

    use Alura\Banco\Modelo\CPF;
    use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};  
    use Alura\Banco\Service\Autenticador;

    //Criando funcionário 1
    $nome = 'Luis Roberto';
    $cpf = new CPF('000.000.000-01');
    $salario = 10000;
    $funcionario_1 = new Gerente($nome, $cpf, $salario);

    echo PHP_EOL . "\t<DADOS Funcionário 1>" . PHP_EOL;
    echo 'Nome: ' . $funcionario_1->getNome() . PHP_EOL;
    echo 'CPF: ' . $funcionario_1->getCPF() . PHP_EOL;
    echo 'Salário: ' . $funcionario_1->getSalario() . PHP_EOL;
    echo 'Bonificação: ' . $funcionario_1->calculaBonificacao() . PHP_EOL;

    //Criando funcionário 2
    $nome = 'Roberta Faria';
    $cpf = new CPF('000.000.000-02');
    $salario = 10000;
    $funcionario_2 = new Diretor($nome, $cpf, $salario);

    echo PHP_EOL . "\t<DADOS Funcionário 2>" . PHP_EOL;
    echo 'Nome: ' . $funcionario_2->getNome() . PHP_EOL;
    echo 'CPF: ' . $funcionario_2->getCPF() . PHP_EOL;
    echo 'Salário: ' . $funcionario_2->getSalario() . PHP_EOL;
    echo 'Bonificação: ' . $funcionario_2->calculaBonificacao() . PHP_EOL;

    //Tentativa de Autenticação com o diretor
    $controlador = new Autenticador();
    $controlador->tentaLogin($funcionario_1, "4321");
    $controlador->tentaLogin($funcionario_2, "1234");
?>