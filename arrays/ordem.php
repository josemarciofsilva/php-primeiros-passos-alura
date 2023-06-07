<?php 

$notas = [
	[
		'aluno' => 'Aparecida',
		'nota' => 8
	],
	[
		'aluno' => 'Livia',
		'nota' => 10
	],
	[
		'aluno' => 'Jose',
		'nota' => 6
	],	
];

function ordenaNotas(array $nota1, $nota2): int
{
	if ($nota1['nota'] > $nota2['nota']) {
		return -1;
	}

	if ($nota2['nota'] > $nota1['nota']) {
		return 1;
	}

	return 0;
}

usort($notas, 'ordenaNotas');

echo "Notas Ordenadas pela nota: " . PHP_EOL;
var_dump($notas);


