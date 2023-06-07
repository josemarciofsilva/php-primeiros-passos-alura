<?php 

$notas = [
	'Joao' => 6,
	'Maria' => 9,
	'Livia' => 10,
	'Jose' => 7,
	'Aparecida' => 10,
	'Ana' => 8,
	'Marcio' => 7,
	'Geraldo' => 4,
	'Amarildo' => 9,
	'Josue' => 5
];

ksort($notas);

var_dump($notas);

// verificar se uma chave existe no array

echo "Marcio fez a prova: " . PHP_EOL; 
var_dump(array_key_exists('Marcio', $notas)) . PHP_EOL;

echo PHP_EOL;

echo "Alguem tirou 10 na prova: " . PHP_EOL;
var_dump(in_array(10, $notas));

echo PHP_EOL;

echo "Quem tirou 10 na prova: " . PHP_EOL;
echo array_search(10, $notas) . PHP_EOL;
