<?php 

class Conta
{
	
	private string $cpfTitular;
	private string $nomeTitular;
	private float $saldo;

	public function __construct(string $cpfTitular, string $nomeTitular)
	{
		$this->cpfTitular = $cpfTitular;
		$this->validaNomeTitular($nomeTitular);
		$this->nomeTitular = $nomeTitular;
		$this->saldo = 0;
	}

	private function validaNomeTitular( string $nomeTitular): void
	{
		if (strlen($nomeTitular) < 5) {
			echo "Nome precisa ter pelo menos 5 caracteres.";
			exit();
		}
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
