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

array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

$alunos2023 = array_merge($alunos2022, $novosAlunos);

var_dump($alunos2023);

