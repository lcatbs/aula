
<?php
	// modelo / estrutura / descritor => Objeto
	class Pessoa{
		// propriedade public / protected / private
		public $nome;
		public $idade;
		public $sexo;
	}

	// criando uma instancia do objeto.
	$bruno = new Pessoa();

	// setters
	// para o nome, idade, sexo
	$bruno->nome = "Bruno";
	$bruno->idade = 33;
	$bruno->sexo = "masculino";

	// "O bruno tem X anos."
	 echo "O Bruno tem {$bruno->idade} anos.";