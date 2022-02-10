<div class="title-panel">Excluir Registro #02</div>

<?php
require_once "conexao.php";

$conexao = novaConexao();

if (isset($_GET['excluir'])) {
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param('i', $_GET['excluir']); // primeiro parametro é o tipo do dado que irá passar e o segundo é dado
    $stmt->execute();
}

$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$resultado = $conexao->query($sql);
$registros = [];

if($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
    echo "Sucesso";
} elseif ($conexao->error) {
    echo "Error: " . $conexao->error;
}

$conexao->close();
?>

<table>
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Açôes</th>
    </thead>
    <tbody>
		<?php foreach ($registros as $registro): ?>
        <tr>
            <td><?= $registro['id'] ?></td>
            <td><?= $registro['nome'] ?></td>
            <td>
                <?=
                // date só aceita o segundo parâmetro como timestamp, entãao tem que usar o strtotime para converter a string para timestamp
                date('d/m/Y', strtotime($registro['nascimento']))
                ?>
            </td>
            <td><?= $registro['email'] ?></td>
            <td>
                <a href="/Curso-PHP/exercises.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>">
                    Excluir
                </a>
            </td>
        </tr>
		<?php endforeach ?>
    </tbody>
</table>
