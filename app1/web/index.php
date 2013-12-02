<html>
	<header>
		<title>App de aula</title>
	</header>
	<body>
		<?php
		require '../aluno.php';
		
		$pessoa1 = new aluno();
		$pessoa1->setNome('Luiz Andrade');
		$pessoa1->setRg('21174394');
		$pessoa1->setSexo('masculino');
		$pessoa1->setIdade(33);
		$pessoa1->setMatricula("1234567");
		$pessoa1->setCurso("PHP & MySQL");

		$pessoa2 = new aluno();
		$pessoa2->setNome('Andre');
		$pessoa2->setRg('21174391');
		$pessoa2->setSexo('masculino');
		$pessoa2->setIdade(39);
		$pessoa1->setMatricula("1234567");
		$pessoa1->setCurso("PHP & MySQL");


		$pessoa3 = new aluno();
		$pessoa3->setNome('Fernando');
		$pessoa3->setRg('21174392');
		$pessoa3->setSexo('masculino');
		$pessoa3->setIdade(37);
		$pessoa1->setMatricula("1234567");
		$pessoa1->setCurso("PHP & MySQL");

		$pessoa4 = new aluno();
		$pessoa4->setNome('Marisa');
		$pessoa4->setRg('21174390');
		$pessoa4->setSexo('feminino');
		$pessoa4->setIdade(41);
		$pessoa1->setMatricula("1234567");
		$pessoa1->setCurso("PHP & MySQL");
		//var_dump($pessoa1);

		$pessoas = [$pessoa1, $pessoa2, $pessoa3, $pessoa4];

		
		?>

		<table>
			<?php

			foreach ($pessoas as $pessoa) {
			
			?>
			<tr>
				<td>Nome</td>
				<td><b><?php echo $pessoa->getNome();?></b></td>
			</tr>
			<tr>
				<td>Rg</td>
				<td><b><?php echo $pessoa->getRG();?></b></td>
			</tr>
			<tr>
				<td>Sexo</td>
				<td><b><?php echo $pessoa->getSexo();?></b></td>
			</tr>
			<tr>
				<td>Idade</td>
				<td><b><?php echo $pessoa->getIdade();?></b></td>
			</tr>
			<tr>
				<td>Matricula</td>
				<td><b><?php echo $pessoa->getMatricula();?></b></td>
			</tr>
			<tr>
				<td>Curso</td>
				<td><b><?php echo $pessoa->getCurso ();?></b></td>
			</tr>
			<tr>
			</tr>
			<?php
				echo "\n";
				}
			?>
		</table>


	</body>
</html>