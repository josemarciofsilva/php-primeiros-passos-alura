<?php 

class Conta
{
	
	private Titular $titular;
	private float $saldo;

	public function __construct(Titular $titular)
	{
		$this->titular = $titular;
		$this->saldo = 0;
	}

	public function getNomeTitular(): string
	{
		return $this->titular->getNome();
	}

	public function getCpfTitular(): string
	{
		return $this->titular->getCpf();
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
