<?php 

$idade = 15;
$numeroPessoas = 2;

echo "=========================================================" . PHP_EOL;
echo "========================BALADA===========================" . PHP_EOL;
echo "=========================================================" . PHP_EOL;
echo "" . PHP_EOL;
echo "Você só pode entrar se tiver a partir de 18 anos ou ter 16 anos e estar acompanhado!" . PHP_EOL;

if ($idade >= 18) {
	echo"Você tem $idade anos - você pode entrar!" . PHP_EOL;
} elseif (($idade >= 16) && ($numeroPessoas > 1) ) {
	echo "Você tem apenas $idade anos - e esta acompanhado - Você pode entrar! " . PHP_EOL;
} else {
	echo "Você tem apenas $idade anos - Você não pode entrar! " . PHP_EOL;
}

?>