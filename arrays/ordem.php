<?php 

$notas = [
	[
		'aluno' => 'Aparecida',
		'nota' => 10
	],
	[
		'aluno' => 'Livia',
		'nota' => 9
	],
	[
		'aluno' => 'Jose',
		'nota' => 6
	],	
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Notas Desordenadas: " . PHP_EOL;
var_dump($notas);

echo "Notas Ordenadas: " . PHP_EOL;
var_dump($notasOrdenadas);


