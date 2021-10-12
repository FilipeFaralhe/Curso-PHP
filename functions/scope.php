<h1 class="title-panel">Função e Escopo</h1>

<?php
function imprimirMensagens() {
  echo "Olá <br>";
  echo "Até a próxima! <br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1; // variável global

function trocaValor() {
  $variavel = 2; // variável local
  echo "Durante a função: $variavel <br>";
}

echo "Antes da função: $variavel <br>";
trocaValor();
echo "Depois da função: $variavel <br>";

echo '<br>';

function trocaValorDeVerdade() {
  global $variavel; // palavra chave global, acessa a variável que está no escopo global
  $variavel = 3;
  echo "Durante a função: $variavel <br>";
  return $variavel; // retorna o valor da variável
}

echo "Antes da função: $variavel <br>";
trocaValorDeVerdade();
echo "Depois da função: $variavel <br>";

var_dump(trocaValorDeVerdade()); // mostra que a função está retornando o valor 3