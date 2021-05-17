<?php
class Cliente {
	private $id;
	private $nome;
	private $telefone;
	private $cpf;
	private $cep;
	private $logradouro;
	private $complemento;
	private $bairro;
	private $localidade;
	
	
	

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		 return $this;
	}
}



?>