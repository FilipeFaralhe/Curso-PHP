<div class="title-panel">Inserir Registro #01</div>

<?php
require_once 'conexao.php';

$sql = "INSERT INTO cadastro
				(nome, nascimento, email, site, filhos, salario)
				VALUES (
                    'teste30',
                    '1989-10-29',
                    'teste30@email.com',
                    'www.sitedaesquina.com.br',
                    1,
                    500
				)";


$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
	echo 'Dados inseridos com sucesso';
} else {
	echo 'Erro: ' . $conexao->error;
}

$conexao->close();