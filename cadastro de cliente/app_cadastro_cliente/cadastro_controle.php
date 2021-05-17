<?php

require "../../app_cadastro_cliente/cliente.model.php";
require "../../app_cadastro_cliente/cadastro.service.php";
require "../../app_cadastro_cliente/conexao.php";

$acao = isset($_GET['acao'] ) ? $_GET['acao'] :$acao;
//echo $acao;

if($acao == 'inserir'){

	$cliente = new Cliente();
	$cliente->__set('nome',$_POST['nomeUsuario']);
	$cliente->__set('telefone',$_POST['telefone']);
	$cliente->__set('cpf',$_POST['cpf']);
	$cliente->__set('cep',$_POST['cep']);
	$cliente->__set('logradouro',$_POST['logradouro']);
	$cliente->__set('complemento',$_POST['complemento']);
	$cliente->__set('bairro',$_POST['bairro']);
	$cliente->__set('localidade',$_POST['localidade']);
	

	$conexao = new Conexao();

	$service = new CadastroService($conexao,$cliente);
	$service -> inserir();


	header('Location: index.php?inclusao=1');
	

	/*
Array
(
    [nomeUsuario] => Elanilson
    [telefone] => 996017676
    [cpf] => 024.985.012-58
    [cep] => 66120-300
)
	*/
}else if($acao == 'recuperar'){
	$cliente = new Cliente();
	$conexao = new Conexao();

	$service = new CadastroService($conexao, $cliente);
	$cliente = $service->recuperar();

}


?>