<div class="title-panel">Include VS Require</div>

<?php
// Include gera uma advertência, mas não para a execução do arquivo(warning)
echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php');
echo 'Usando include com arquivo inexistente...<br>';

// Require para imediatamente quando o arquivo não é encontrado, deixando de executar o restante do código (Fatal error)
echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');
echo 'teste...<br>';

