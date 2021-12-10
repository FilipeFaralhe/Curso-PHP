<div class="title-panel">Criar Banco</div>

<?php
require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php'; //Executa o comando somente se não exister um banco de dados com o nome passado

$result = $conexao->query($sql); // executa a query para criar o database

if($result) {
    echo 'Banco criado com sucesso'; // retorna se o database for criado com sucesso
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close(); // fecha a conexão com o database