<?php 

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


