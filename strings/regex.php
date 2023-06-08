<?php 

$telefones = ['(11) 99999 - 999', '(12) 99999 - 9999', '(1811) 99999 - 9999' ];



foreach ($telefones as $telefone) {
	$telefoneValido = preg_match('/\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}/', $telefone);

	if ($telefoneValido) {
		echo "Telefone Válido - " . $telefone . PHP_EOL;
	} else {
		echo "Telefone Inválido - " . $telefone . PHP_EOL;
	}
}




