<?php 
// array associativo

$conta1 = [
	'titular' => 'José Marcio',
	'saldo' => 1000
];

$conta2 = [
	'titular' => 'Livia Ferreira',
	'saldo' => 10000
];

$conta3 = [
	'titular' => 'Aparecida Cardoso',
	'saldo' => 3000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

echo PHP_EOL;
echo "Percorrendo array com for" . PHP_EOL;
for ($i=0; $i < count($contasCorrentes) ; $i++) { 
	echo "Titular: " . $contasCorrentes[$i]['titular'] . PHP_EOL;
}

$contasCorrentesCPF = [
		12345678910 => [
		'titular' => 'José Marcio',
		'saldo' => 1000
	],
		12345678911 => [
		'titular' => 'Livia Ferreira',
		'saldo' => 10000
	],
		12345678912 => [
		'titular' => 'Aparecida Cardoso',
		'saldo' => 3000
	]
];

$contasCorrentesCPF[32154698767] = [
	'titular' => 'Dedé Ferreira',
	'saldo' => 2000
];
echo PHP_EOL;
echo "Percorrendo array com forech conta com indice cpf" . PHP_EOL;

foreach ($contasCorrentesCPF as $cpf => $conta) {
	echo "Titular: " . $conta['titular'] . " - Saldo: " . 
	$conta['saldo'] . " - CPF:  " . $cpf . PHP_EOL;
}



