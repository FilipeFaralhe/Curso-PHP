<h1 class="title-panel">Recursividade</h1>

<?php
function somaUmAte($numero) {
  $soma = 0;
  for(;$numero >= 1; --$numero) {
    $soma += $numero;
  }
  return $soma;
}

echo somaUmAte(5) . '<br>';


//Recursividade
function somaRecursivaUmAte($numero) {
  // Condição de parada
  if($numero === 1) {
    return 1;
  }
  return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(5) . '<br>';