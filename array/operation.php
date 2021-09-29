<h1 class="title-panel">Operação com array</h1>

<?php

$dados1 = [
  "nome" => "Jose",
  "idade" => 28
];

$dados2 = [
  "nome" => "Maria",
  "naturalidade" => "Fortaleza"
];

$dados2['endereço'] = "Rua A"; // Adiciona de forma manual um elemento no array

/*
  Ao juntar dois arrays, obtemos um conflito de chaves "nome",
  o php vai pegar valor que esta mais a esquerda neste caso seria o dados1
*/

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // verifica se é um array
echo '<br>' . count($dadosCompletos); // mostra quantos elementos tem no array

echo '<br>';
$indice = array_rand($dadosCompletos); // devolve um índice aleatório do array
echo "$indice => $dadosCompletos[$indice]";
echo '<br>';

unset($dadosCompletos["nome"]); // delata a informação do array passada como argumento
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos); // deleta o array inteiro
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

/*
  tem conflito no array, pois os índices são iguais.
  Portante ira imprimir somente o array que está a esquerda da soma
*/

$decimais = $impares + $pares;
echo '<br>';
print_r($decimais);

// array_merge concatena os dois arrays
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);
echo '<br>';

// altera o array colocando em forma ordenada;
sort($decimais);
print_r($decimais);