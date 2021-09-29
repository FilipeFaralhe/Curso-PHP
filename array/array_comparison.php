<h1 class="title-panel">Array Comparação</h1>

<?php

$array1 = ['nome' => 'Maria', 'idade' => 33];
$array2 = ['nome' => 'Maria', 'idade' => 33];
var_dump($array1 === $array2);

echo '<br>';

$array3 = ['idade' => 33, 'nome' => 'Maria'];

// retorna true, pois a ordem não importa
var_dump($array1 == $array3);
// retorna false, pois a ordem importa
var_dump($array1 === $array3);

echo '<br>';

$array4 = ['idade' => '33', 'nome' => 'Maria'];
var_dump($array1 == $array3); // retorna true pois é igualdade

var_dump($array1 === $array4); // retorna false pois os operandos são estritamente diferentes