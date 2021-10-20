<h1 class="title-panel">Operador Ternário</h1>

<?php
$idade = 10;
$status = '';

if ($idade >= 18) {
  $status = 'Maior de idade';
} else {
  $status = 'Menor de idade';
}

echo "$status<br>";

        // Expressão         Verdadeiro           Falso
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';

echo "$status<br>";

// Um operador ternário dentro do outro
$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : "Não aposentado" :  $status = 'Menor de idade';

echo "$status<br>";

// recomendado
$recebeBeneficio = $idade >= 65 ? 'Aposentado' : "Não aposentado";
$status = $idade >= 18 ? $recebeBeneficio :  $status = 'Menor de idade';

echo "$status<br>";