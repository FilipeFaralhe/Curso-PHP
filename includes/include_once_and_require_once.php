<div class="title-panel">Include_once</div>
<?php
/*
    A declaração include_once inclui e avalia o arquivo informado durante a execução do script. Este é um comportamento similar a declaração include,
    com a única diferença que, se o código do arquivo já foi incluído, não o fará novamente, e o include_once retornará true. Como o nome sugere, o arquivo
    será incluído somente uma vez.
*/
include_once('include_once_file.php');


echo "Variável = '{$variavel}' . <br>";
$variavel = 'Include: Variável alterada';
echo "Variável = '{$variavel}' . <br>";


require_once('require_once_file.php');

/*
    A declaração require_once é idêntica a require exceto que o PHP verificará se o arquivo já foi incluído, e em caso afirmativo,
    não o incluirá (exigirá) novamente.
*/
echo "Variável = '{$variavel}' . <br>";
$variavel = 'Require: Variável alterada';
echo "Variável = '{$variavel}' . <br>";




