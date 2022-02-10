<div class="title-panel">Criar Tabela</div>

<?php

require_once 'conexao.php';

// UNSIGNED = não aceita numeros inteiros menores que zero
// AUTO_INCRIMENT = faz com que atribua numeros automatimente
// PRIMARY KEY = faz o que o atributo seja uma chave primaria
// NOT NULl = fala que o campo não pode ser nulo

// DDL - Data Definition Lang = linguagem de definição de dados.
$sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();