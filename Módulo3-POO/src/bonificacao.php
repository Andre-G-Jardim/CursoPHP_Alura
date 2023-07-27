<?php 

    require_once 'autoload.php';

    use Alura\Banco\Modelo\CPF;
    use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};
    use Alura\Banco\Service\ControladorDeBonificacao;

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

    //Criando funcionário 3
    $nome = 'Ferdré Cudim';
    $cpf = new CPF('123.456.789-10');
    $salario = 5000;
    $funcionario_3 = new Desenvolvedor($nome, $cpf, $salario);

    echo PHP_EOL . "\t<DADOS Funcionário 3>" . PHP_EOL;
    echo 'Nome: ' . $funcionario_3->getNome() . PHP_EOL;
    echo 'CPF: ' . $funcionario_3->getCPF() . PHP_EOL;
    echo 'Salário: ' . $funcionario_3->getSalario() . PHP_EOL;
    echo 'Bonificação: ' . $funcionario_3->calculaBonificacao() . PHP_EOL;

    echo PHP_EOL . 'Aumento para o desenvolvedor...' . PHP_EOL;
    $funcionario_3->sobeDeNivel();
    echo 'Salário: ' . $funcionario_3->getSalario() . PHP_EOL;

    $controlador = new ControladorDeBonificacao();
    $controlador->adicionaBonificacaoDe($funcionario_1);
    $controlador->adicionaBonificacaoDe($funcionario_2);
    $controlador->adicionaBonificacaoDe($funcionario_3);
    echo PHP_EOL . 'Total de Bonificação: ' . $controlador->recuperaTotal();
?>  