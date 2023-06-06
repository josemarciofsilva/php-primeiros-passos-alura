<?php 
echo "=========================================================" . PHP_EOL;
echo "========================IMC==============================" . PHP_EOL;
echo "=========================================================" . PHP_EOL;
echo PHP_EOL;

echo "Calculo do IMC" . PHP_EOL;
echo PHP_EOL;
echo "Segundo a Organizacao Mundial da Saúde:" . PHP_EOL;
echo "IMC Abaixo de 18 - Insatisfatorio" . PHP_EOL;
echo "IMC Entre 18 e 25 - Recomendado" . PHP_EOL;
echo "IMC Acima  de 25 - Insatisfatorio" . PHP_EOL;

$peso = 73;
$altura = 1.71;
$imc = ($peso / ($altura) ** 2);

echo PHP_EOL;
echo "Seu IMC é de $imc" . PHP_EOL;

if ($imc < 18) {
	echo "ERRO - INSATISFATORIO - Abaixo do recomendado pela Organizacao Mundial da Saúde" . PHP_EOL;
} elseif ($imc < 25) {
	echo "OK RECOMENDADO - Dentro do recomendado pela Organizacao Mundial da Saúde" . PHP_EOL;
} else {
	echo "ERRO - INSATISFATORIO - Acima do recomendado pela Organizacao Mundial da Saúde" . PHP_EOL;
}



 ?>