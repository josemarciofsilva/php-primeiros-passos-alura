<?php 

class Conta
{
	
	public string $cpfTitular;
	public string $nomeTitular;
	public float $saldo;

	public function sacar(float $valor): void
	{
		if ($valor > $this->saldo) {
			echo "Saldo Insuficiente";
		}

		if ($valor > 0) {
			$this->saldo -= $valor;	
		}		
	}

	public function depositar(float $valor): void
	{
		if ($valor < 0) {
			echo "Valor necessita ser positivo!";
		}

		$this->saldo += $valor;
	}





}
