<?php
	require "../Pessoa.php";
	class aluno extends Pessoa{
		private $matricula = 123456;
		private $curso = 'PHP';

		public function setMatricula($num){
			$this->matricula = $num;

		}

		public function setCurso($curso){
			$this->curso = $curso;
		}

		public function getMatricula(){
			return $this->matricula;
		}

		public function getCurso(){
			return $this->curso;
		}
	}

