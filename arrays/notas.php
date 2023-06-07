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