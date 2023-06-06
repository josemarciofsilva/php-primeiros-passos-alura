<?php 
$idade = 48; // integer
$salario = 1200.89; // double

echo gettype($idade) . PHP_EOL;
echo gettype($salario) . PHP_EOL;

$divisao = 10 / 3;

echo gettype($divisao) . PHP_EOL; // automaticamente se torna um double

// php é uma linguagem dinamicamente tipada

$texto = "Essa é uma string ou quer dizer apenas um texto";

echo gettype($texto) . PHP_EOL;

$verdadeiro = true;
echo gettype($verdadeiro) . PHP_EOL;
 ?>