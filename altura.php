<?php

$brinquedo = readline("Qual brinquedo você quer acessar (1 = Montanha-Russa, 2 = Carrossel, 3 = Roda-Gigante)");
$altura = readline("Qual a sua altura?");

switch ($brinquedo) {
		
		case 1:
			if($altura>1.60) {
			echo "Você pode andar na montanha-russa!"; 
		} else {
			echo "Você não pode andar no brinquedo!";
		}
			break;

		case 2:
			if($altura>1.20) {
			echo "Você pode andar no carrosel!"; 
		} else {
			echo "Você não pode andar no brinquedo!";
		}
			break;

		case 3:
			if($altura>1.50) {
			echo "Você pode andar na roda-gigante!"; 
		} else {
			echo "Você não pode andar no brinquedo!";
		}
			break;
		default;
		echo "Este brinquedo não existe! Escolha entre 1, 2 ou 3";


}

?>