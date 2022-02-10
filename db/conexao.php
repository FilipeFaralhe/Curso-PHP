<?php

function novaConexao($banco = 'curso_php') {
	$servidor = '127.0.0.1:3306';
	$usuario = 'root';
	$senha = '2429';

	$conexao = new mysqli($servidor, $usuario, $senha, $banco);

	if($conexao->connect_error) {
		die('Erro: ' . $conexao->connect_error); //caso encontre um erro, para o programa e devolve uma mensagem para o usuário
	}

	return $conexao;
}
