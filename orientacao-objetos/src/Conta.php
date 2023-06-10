<?php 

class Conta
{
	
	private string $cpfTitular;
	private string $nomeTitular;
	private float $saldo = 0;

	public function setNomeTitular(string $nome): void
	{
		$this->nomeTitular = $nome;
	}

	public function setCpfTitular( string $cpf): void
	{
		$this->cpfTitular = $cpf;
	}

	public function getNomeTitular(): string
	{
		return $this->nomeTitular;
	}

	public function getCpfTitular(): string
	{
		return $this->cpfTitular;
	}

	public function getSaldo(): float
	{
		return $this->saldo;
	}



	public function sacar(float $valor): void
	{
		if ($valor > $this->saldo) {
			echo "Saldo Insuficiente";
			return;
		}

		if ($valor < 0) {
			echo "Valor necessita ser positivo!";
			return;
		}

		$this->saldo -= $valor;	
				
	}

	public function depositar(float $valor): void
	{
		if ($valor < 0) {
			echo "Valor necessita ser positivo!";
			return;
		}

		$this->saldo += $valor;
	}

	public function transferir(float $valor, Conta $contaDestino): void
	{
		if ($valor > $this->saldo) {
			echo "Saldo Insuficiente";
			return;
		}

		$this->sacar($valor);
		$contaDestino->depositar($valor);
	}




}
