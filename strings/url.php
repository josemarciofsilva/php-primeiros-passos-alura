<?php 

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')) {
  	echo 'É uma url segura';
} else {
	echo 'Não é uma url segura';
}

echo PHP_EOL;

if (str_ends_with($url, 'br')) {
	echo 'É um dominio do Brasil';
} else {
	echo 'Não é um dominio do Brasil';
}

echo PHP_EOL;

