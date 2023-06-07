<?php 

require_once 'funcoes.php';

$contasCorrentes = [
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

echo PHP_EOL;
echo "Percorrendo array com forech conta com indice cpf" . PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
	exibeMensagem("Titular: " . $conta['titular'] . " - Saldo: " . 
		$conta['saldo'] . " - CPF:  " . $cpf);
}

echo PHP_EOL;

$contasCorrentes[12345678910] = sacar($contasCorrentes[12345678910], 30000);
$contasCorrentes[12345678911] = sacar($contasCorrentes[12345678911], 500);
$contasCorrentes[12345678910] = depositar($contasCorrentes[12345678910], 100);
$contasCorrentes[12345678912] = sacar($contasCorrentes[12345678912], 2000);

titularLetrasMaiusculas($contasCorrentes[12345678910]);

echo PHP_EOL;
echo "Percorrendo depois de processamento" . PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
	exibeMensagem("Titular: " . $conta['titular'] . " - Saldo: " . 
		$conta['saldo'] . " - CPF:  " . $cpf);
}







