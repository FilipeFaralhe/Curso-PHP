<div class="title-panel">Require & Return</div>

<?php
$valorRetorno = require('used_return.php');
echo $valorRetorno . '<br>';
echo $variavelRetornada . '<br>';

echo __DIR__ . '<br>';

$valorRetornado2 = require(__DIR__ . '/used_return.php');
echo $valorRetornado2 . '<br>';

$valorRetornado3 = require(__DIR__ . '/not_used_return.php'); // retorna 1 se foi carregado com sucesso ou 0 caso não foi
echo $valorRetornado3 . '<br>';

$valorRetornado3 = require(__DIR__ . '/not_used_return.php');
var_dump($valorRetornado3);

