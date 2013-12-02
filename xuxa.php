<?php
	$arrIdades = ["Luiz" => 33,
					"Bruno" => 33,
					"Ivo" => 34,
					"Xuxa" => 666];



					
	foreach ($arrIdades as $nome => $idade) {
		$ano = 2013 - $idade;
		echo "A {$nome} tem {$idade} e nasceu em {$ano}.";
		echo  "\n";
	}

	$nome = "José de Alencar";

	// cont() -> usa-se para contar posições do array.
	// strlen() -> usa-se para contar caracteres de uma string.

	for($i = 0; $i < strlen($nome); i++){


	}


?>