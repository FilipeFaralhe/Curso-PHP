<h1 class="title-panel">Map e Filter</h1>

<?php
//Exemplo sem map
// Criando um outro array e colocando os valores modificados, nele
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach ($notas as $nota) {
  $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<br>';

//MAP
//Exemplo 1 com map
$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

echo '<br>';

//Exemplo 2 com map
function calculoNota($notas) {
  $notasFinal = round($notas) + 1;
  return $notasFinal > 10 ? 10 : $notasFinal;
}

$notasFinais3 = array_map('calculoNota', $notas);
print_r($notasFinais3);

echo '<br>';

//FILTER
/*
 filter cria um outro array somente com os
 itens retornados como true, como no exemplo abaixo
*/
//Exemplo
$notasAcimaDaMedia = [];
function aprovados($notas) {
  return $notas >= 7;
}

$notasAcimaDaMedia = array_filter($notas, 'aprovados');

print_r($notasAcimaDaMedia);



