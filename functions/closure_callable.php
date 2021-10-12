<h1 class="title-panel">Closure e Callable</h1>

<?php
// CALLABLE
/* um callable é algo que pode ser chamado, como no caso dessa funções*/
$soma1 = function ($a , $b) {
  return $a + $b;
};

function soma2($a , $b) {
  return $a + $b;
}

echo $soma1(2, 3) . '<br>';

// retorna true se o argumento passado na função for um callable
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo (is_callable('soma2') ? 'Sim' : 'Não') . '<br>';



//CLOSURE
/*
  É um classe usada para representar as funções anonimas.
  -> Funções anônimas produzem objetos desse tipo. Esta classe tem métodos que
  permitem um maior controle da função anônima depois de criada.
*/
var_dump($soma1);
echo '<br>';


