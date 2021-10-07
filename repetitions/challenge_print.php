<h1 class="title-panel">Desafio impressão</h1>

<!--
  Enunciado:
  -> Imprima apenas os valores do array que contém índice par
  -> Resolver com for e foreach
  -> Valores esperados: AAA, CCC, EEE;
-->

<?php
$array = [
  "AAA",
  "BBB",
  "CCC",
  "DDD",
  "EEE",
  "FFF"
];

echo "<b>Exemplo com For</b>";
echo "<br>";
for ($indice = 0; $indice < count($array); $indice++) {
  if ($indice % 2 === 0) {
    echo "$array[$indice] <br>";
  }
}

echo "<b>Exemplo com Foreach</b>";
echo "<br>";
foreach ($array as $indice => $value) {
  if($indice % 2 === 0) {
    echo "$value <br>";
  }
}
