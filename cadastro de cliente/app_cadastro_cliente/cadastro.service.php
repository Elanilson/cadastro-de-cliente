<?php
class CadastroService{
	private $conexao;
	private $cliente;

	public  function __construct(Conexao $conexao, Cliente $cliente){
		$this ->conexao = $conexao->conectar();
		$this ->cliente = $cliente;

	}

	public function inserir(){
		$query = 'insert into tb_cliente (nome,telefone,cpf,cep,logradouro,complemento,bairro,localidade)values(:nome,:telefone,:cpf,:cep,:logradouro,:complemento,:bairro,:localidade)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome', $this->cliente->__get('nome'));
		$stmt->bindValue(':telefone', $this->cliente->__get('telefone'));
		$stmt->bindValue(':cpf', $this->cliente->__get('cpf'));
		$stmt->bindValue(':cep', $this->cliente->__get('cep'));
		$stmt->bindValue(':logradouro', $this->cliente->__get('logradouro'));
		$stmt->bindValue(':complemento', $this->cliente->__get('complemento'));
		$stmt->bindValue(':bairro', $this->cliente->__get('bairro'));
		$stmt->bindValue(':localidade', $this->cliente->__get('localidade'));
		$stmt->execute();
	}
	public function recuperar(){
		$query = '
		select 
			*
		from 
			tb_cliente 
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}


?>