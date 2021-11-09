<h1 class="title-panel">Include</h1>

<?php
echo "Executei essa linha do arquivo include<br>";
include('include_file.php');
include('include_file.php'); // dará um problema, pois ele irá definar a função do include_file, duas vezes

echo somaInclude(2, 5) . '<br>';

echo "Acessando a varivável '{$variavel}' pelo arquivo include";