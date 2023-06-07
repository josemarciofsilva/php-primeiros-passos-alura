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

function titularLetrasMaiusculas(array &$conta)
{
	$conta['titular'] = mb_strtoupper($conta['titular']);
}