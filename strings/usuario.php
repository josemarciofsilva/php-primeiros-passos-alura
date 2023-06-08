<?php 

$nome = 'Jose Marcio Ferreira da Silva';
$email = 'jmarcio@gmail.com';
$senha = '123';



if (strlen($senha) < 8 ) {
 	echo "Senha insegura!" . PHP_EOL;
 } 

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo 'Usuario: ' . strtoupper($usuario) . PHP_EOL;

echo 'Dominio: ' . substr($email, $posicaoDoArroba + 1) . PHP_EOL;


echo PHP_EOL;

var_dump(explode(' ', $nome));


$string = ltrim(' Teste com espaço dos 2 lados ');

echo $string . PHP_EOL;
