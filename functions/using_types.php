<h1 class="title-panel">Declarando Tipos</h1>

<?php
//Exemplo um sem usar tipos
function somar1($a, $b) {
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}

echo somar1(2, 4) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1, '4dois') . '<br>';

echo '<hr>';

// Parâmetros recebe somente int como argumentos
function somar2(int $a, int $b) {
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}

echo somar2(2, 5) . '<br>';
echo somar2(3.5, 5.4) . '<br>'; // soma somente os inteiros e ignora o ponto flutuante
// echo somar2(3, '4dois') . '<br>'; // error, pois eu forneci uma string sendo que o parâmetro pede int

echo '<hr>';

// Função só retorna inteiros
function somar3($a, $b): int {
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}

echo somar3(2, 4) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(1, '4dois') . '<br>';