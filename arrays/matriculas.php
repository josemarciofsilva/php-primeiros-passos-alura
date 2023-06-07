<?php 

$alunos2022 = [
	'Joao',
	'Maria',
	'Livia',
];

$novosAlunos = [
	'Jose',
	'Aparecida',
	'Dedé',
];

$alunos2023 = array_merge($alunos2022, $novosAlunos);

var_dump($alunos2023);

