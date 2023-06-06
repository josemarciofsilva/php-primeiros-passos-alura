<?php 


function exibeMensagem(string $mensagem): void
{
	echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor): array
{
	if ($valor > $conta['saldo']) {
		exibeMensagem($conta['titular'] . " - ERRO - Saldo Insuficiente");
	} else {
		$conta['saldo'] -= $valor;
		exibeMensagem($conta['titular'] . " - Efetuado Saque de " . $valor);
	}

	return $conta;
}

function depositar(array $conta,  float $valor): array
{
	if ($valor < 0) {
		exibeMensagem($conta['titular'] . " - ERRO - Somente Valor Positivo");
	} else {
		$conta['saldo'] += $valor;
		exibeMensagem($conta['titular'] . " - Efetuado Deposito de " . $valor);
	}

	return $conta;
}


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


echo PHP_EOL;
echo "Percorrendo depois de saque" . PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
	exibeMensagem("Titular: " . $conta['titular'] . " - Saldo: " . 
		$conta['saldo'] . " - CPF:  " . $cpf);
}







