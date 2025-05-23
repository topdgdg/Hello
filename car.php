<?php
$habilitcao;
$nome = readline("Qual o seu nome?");
$idade = readline("Qual a sua idade?");
$cpf = readline("Qual seu CPF?");

$habilitacao = readline("Voce tem habilitacao se sim digite 1 se nao digite 2:");

switch ($habilitacao) {
		
		case 1:
			$carteira = readline("Qual o tipo de carteira?");
			if($idade>=18) {
			echo "Você pode tirar sua habilitação\n";
			echo "Nome: $nome\n";
			echo "Idade: $idade\n";
			echo "CPF: $cpf\n";

		} else {
			echo "Você não pode tirar a habilitação pois é menor de idade";
		}
			break;

		case 2:
			$habilitacao = readline("Voce ja tem habilitação\n");
			echo "Nome: $nome\n";
			echo "Idade: $idade\n";
			echo "CPF: $cpf\n";

			break;
}

?>