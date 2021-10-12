<h1 class="title-panel">Retornando Função</h1>

<?php
/*
  Para conseguir usar o valor do parâmetro A,
  foi necessário usar uma palavra chave "use",
  permitindo o acesso do parâmetro
*/
function soma($a) {
  return function ($b) use ($a) {
    return $a + $b;
  };
}

echo soma(3)(3);

$doisMais = soma(2);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);

