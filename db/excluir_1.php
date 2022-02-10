<div class="title-panel">Excluir Registro #01</div>

<?php
require_once "conexao.php";

$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Excluido com Sucesso";
} else {
    echo "Error: " . $conexao->error;
}

$conexao->close();