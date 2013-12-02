<?php
class pessoa{
	private $rg;
	private $nome;
	private $sexo;
	private $idade;

	public function setRG($rg){
		$this->rg = $rg;		
	}

	public function setNome($nome){
		$this->nome = $nome;		
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;		
	}

	public function setIdade($idade){
		$this->idade = $idade;		
	}

	
	// geters
	public function getRG(){
		return $this->rg;		
	}

	public function getNome(){
		return $this->nome;		
	}

	public function getSexo(){
		return $this->sexo;		
	}

	public function getIdade(){
		return $this->idade;		
	}
}
