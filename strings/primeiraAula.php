<?php 

$nome = 'Jose Marcio Ferreira dos Santos';

 $ehDaMinhaFamilia = str_contains($nome, 'Silva');

 if ($ehDaMinhaFamilia) {
 	echo "$nome é da minha familia";
 } else {
 	echo "$nome não é da minha familia";
 }

 echo PHP_EOL;
 	
 