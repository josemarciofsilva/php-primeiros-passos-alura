<?php 
echo "=========================================================" . PHP_EOL;
echo "========================REPETIÇÃO========================" . PHP_EOL;
echo "=========================================================" . PHP_EOL;
echo "" . PHP_EOL;
echo "Repetição pelo comando FOR" . PHP_EOL;
for ($i=0; $i <= 10; $i++) {
	if ($i == 7) { continue; } 
	echo "#$i ";
}

echo PHP_EOL;
echo PHP_EOL;

echo "Repetição pelo comando WHILE" . PHP_EOL;

$contador = 0;

while ($contador <= 10) {
	if ($contador == 7) { break; }
	echo "#$contador ";
	$contador += 1;
}

echo PHP_EOL;




 ?>