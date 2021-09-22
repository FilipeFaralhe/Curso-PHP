<h1 class="title-panel">Valor VS Referência</h1>

<?php
$variavel = 'Valor inicial';
echo $variavel;

// Atribuição por valor
/*
  Gera copias dos valores e cria um novo espaço na memoria
*/
$variavelValor = $variavel;
echo "<br> $variavelValor ";
$variavelValor = "Novo valor";
echo "$variavelValor";

// Atribuição por Referência
/*
  Quando colocamos o '&' na frente de uma variável, significa que
  queremos pegar o endereço de memoria daquela variável.
*/
$variavelReferencia = &$variavel; // duas variáveis apontando para o mesmo endereço de memoria
$variavelReferencia = 'Mesma referencia';
echo "<br> $variavelReferencia $variavel";
