<h1 class="title-panel">Funções Anonimas</h1>

<?php
//Exemplo 1
// Criando uma função anonima e colocando em uma variável
$soma = function ($a, $b) {
  return $a + $b;
};

$multiplicacao = function ($a, $b) {
  return $a * $b;
};

echo $soma(1, 2) . '<br>';

function executar($a, $b, $op, $funcao) {
  $resultado = $funcao($a, $b);
  echo "$a $op $b = $resultado" . '<br>';
}

// Chamando função anonima como parâmetro de outra função
executar(2, 3, '+', function ($a, $b) {
  return $a + $b;
});

/*
  Chamando uma função anonima que está dentro de
  um variável e passando como parâmetro de outra função
*/
executar(2, 3, '+', $soma);
executar(2, 3, '*', $multiplicacao);




