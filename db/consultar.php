<div class="title-panel">Consultar DB</div>

<?php
require_once "conexao.php";


$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

// se o numero de linha for maior que zero, retorna true
if($resultado->num_rows > 0) {
    //fetch_assoc irá retornar um array associativo ou sendo, um array de chave e valor.
    while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
    }
    echo 'Operaçãao realizada com sucesso';
} elseif($conexao->error) {
    echo 'Error: ' . $conexao->error;
}

$conexao->close();
?>

<table>
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
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
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
