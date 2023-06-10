<?php 

require 'Conta.php';

$primeiraConta = new Conta();
$primeiraConta->saldo = 200;
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Vinicius Dias';

var_dump($primeiraConta); // Verifique que o objeto já possui os dados necessários de uma conta criada

echo PHP_EOL;

$segundaConta = new Conta();
$segundaConta->cpfTitular = '987.654.321-10';
$segundaConta->nomeTitular = 'Patricia';
$segundaConta->saldo = 1500;

$segundaConta->sacar(200);

$primeiraConta->depositar(300);

var_dump($primeiraConta); // Verifique que o objeto não teve seus valores alterados

echo PHP_EOL;

var_dump($segundaConta); // Note que este objeto possui os valores da segunda conta criada

