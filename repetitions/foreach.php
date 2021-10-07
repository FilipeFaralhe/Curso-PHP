<h1 class="title-panel">Foreach</h1>

<?php
$semanas = [
  'Domingo',
  'Segunda',
  'Terça',
  'Quarta',
  'Quinta',
  'Sexta',
  'Sábado'
];

foreach ($semanas as $values) {
  echo "$values <br>";
}

foreach ($semanas as $index => $values) {
  echo "$index : $values <br>";
}

$matrix = [
  ['a', 'e', 'i', 'o', 'u'],
  ['b', 'c', 'd']
];

foreach ($matrix as $linha) {
  // para cada linha da matrix, eu pego um valor
  foreach ($linha as $values) {
    echo "$values";
  }
  echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
echo "Antes: ";
print_r($numeros);
//modificar os valores do array usando foreach, pegando a referencia de memoria com "&"
foreach ($numeros as &$dobrar) {
  $dobrar *= 2;
}
echo "Depois: ";
print_r($numeros);