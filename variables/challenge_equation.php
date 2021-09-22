<h1 class="title-panel">Desafio Equação</h1>

<?php

$numeradorA =  (6 * (3 + 2)) ** 2;
$numeradorB =  (1 - 5) * (2 - 7);
$denominadorA = 3 * 2;
$denominadorB = 2;
$denominadorTotal = 10 ** 3;

$contaTotal = ($numeradorA / $denominadorA - ($numeradorB / $denominadorB) ** 2) ** 3 / $denominadorTotal;

echo "O resultado final é: " . $contaTotal . "." . '<br>';
echo '<br>';
echo 'Valor das variáveis';
echo '<br>';
echo $numeradorA;
echo '<br>';
echo $numeradorB;
echo '<br>';
echo $denominadorA;
echo '<br>';
echo $denominadorB;
echo '<br>';
echo $denominadorTotal;
echo '<br>';