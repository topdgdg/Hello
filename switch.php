<?php

echo "1 = Soma\n 2 = Subtração\n 3 = Multiplicação\n 4 = Divisão\n";

$operacao = readline("Digite o numero da operação");

$valor1 = readline("Digite o valor");
$valor2 = readline("Digite o segundo valor");

switch ($operacao) {
	case 1;
		$resultado = $valor1 + $valor2;
		echo $resultado;
		break;
	case 2;
		$resultado = $valor1 - $valor2;
		echo $resultado;
		break;
	case 3; 
		$resultado = $valor1 * $valor2;
		echo $resultado;
		break;
	case 4;
		if ($valor1 && $valor2 != 0) {
			$resultado = $valor1 / $valor2;
			echo $resultado;

		} else {
			echo "Divisão por zero não existe";	
		}
		break;
	default;
		echo "Operação invalida! Escolha entre 1, 2, 3 ou 4";
}
?>