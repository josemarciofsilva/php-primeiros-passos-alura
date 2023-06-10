<?php 

require 'Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');

$primeiraConta->depositar(200);

echo "Primeira Conta Criada" . PHP_EOL;
echo PHP_EOL;
echo 'Nome Titular: ' . $primeiraConta->getNomeTitular() . PHP_EOL;
echo 'Nome CPF Titular: ' . $primeiraConta->getCpfTitular() . PHP_EOL;
echo 'Saldo Titular: ' . $primeiraConta->getSaldo() . PHP_EOL;

echo PHP_EOL;
echo "Segunda Conta Criada" . PHP_EOL;
echo PHP_EOL;

$segundaConta = new Conta('987.654.321-10', 'Patricia');

$segundaConta->depositar(1500);

echo 'Nome Titular: ' . $segundaConta->getNomeTitular() . PHP_EOL;
echo 'Nome CPF Titular: ' . $segundaConta->getCpfTitular() . PHP_EOL;
echo 'Saldo Titular: ' . $segundaConta->getSaldo() . PHP_EOL;

echo PHP_EOL;
echo "Efetuado saque de R$ 200 da Segunda Conta " . PHP_EOL;
echo PHP_EOL;

$segundaConta->sacar(200);

echo 'Nome Titular: ' . $segundaConta->getNomeTitular() . PHP_EOL;
echo 'Nome CPF Titular: ' . $segundaConta->getCpfTitular() . PHP_EOL;
echo 'Saldo Titular: ' . $segundaConta->getSaldo() . PHP_EOL;

echo PHP_EOL;
echo "Efetuado transferencia de R$ 300 entre Primeira conta para a Segunda Conta " . PHP_EOL;
echo PHP_EOL;

$segundaConta->transferir(300, $primeiraConta);

echo 'Nome Titular: ' . $segundaConta->getNomeTitular() . PHP_EOL;
echo 'Nome CPF Titular: ' . $segundaConta->getCpfTitular() . PHP_EOL;
echo 'Saldo Titular: ' . $segundaConta->getSaldo() . PHP_EOL;

echo PHP_EOL;
echo "Saldo da Primeira Conta " . PHP_EOL;
echo PHP_EOL;

echo 'Nome Titular: ' . $primeiraConta->getNomeTitular() . PHP_EOL;
echo 'Nome CPF Titular: ' . $primeiraConta->getCpfTitular() . PHP_EOL;
echo 'Saldo Titular: ' . $primeiraConta->getSaldo() . PHP_EOL;


