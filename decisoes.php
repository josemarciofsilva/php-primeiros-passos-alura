<?php 

$idade = 16;

echo "=========================================================" . PHP_EOL;
echo "========================BALADA===========================" . PHP_EOL;
echo "=========================================================" . PHP_EOL;
echo "" . PHP_EOL;
echo "Você só pode entrar se tiver a partir de 18 anos!" . PHP_EOL;

if ($idade >= 18) {
	echo"Você tem $idade anos - você pode entrar!" . PHP_EOL;
} else {
	echo "Você tem apenas $idade anos - Você não pode entrar! " . PHP_EOL;
}

?>