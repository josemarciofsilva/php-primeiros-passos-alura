<?php 

$idadeList = [21, 23, 19, 44, 25, 30, 41, 18, 17, 33];

echo "Percorrendo array com foreach" . PHP_EOL;

foreach ($idadeList as $idade) {
	echo "Idade: $idade" . PHP_EOL;
}

echo PHP_EOL;
echo "Percorrendo array com for" . PHP_EOL;

for ($i=0 ; $i < count($idadeList) ; $i++ ) { 
	echo(" idade = $idadeList[$i]") . PHP_EOL;
}



 ?>