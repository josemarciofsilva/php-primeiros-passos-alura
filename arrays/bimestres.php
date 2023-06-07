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

$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$array3 = [1, 7, 13];

var_dump($diferenca = array_diff($array1, $array2, $array3));