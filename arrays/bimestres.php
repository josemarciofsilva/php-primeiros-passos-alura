<?php 

$notasBimestre1 = [
	'Joao' => 6,
	'Maria' => 9,
	'Livia' => 10,
];

$notasBimestre2 = [
	'Maria' => 9,
	'Livia' => 10,
];

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

