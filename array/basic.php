<h1 class="title-panel">Array</h1>

<?php

$lista = array(1, 2, 3.4, "texto");

//formas de imprimir um array
var_dump($lista);
echo '<br>';
print_r($lista); //recomendado
echo '<br>';

// É possível mudar o valor de um índice do array, seguindo o exemplo
$lista[0] = 100;
print_r($lista);

// acessa os elementos do array através de colchetes e o índice do valor desejado
echo '<br>' . $lista[0]; // retorna 100
echo '<br>' . $lista[1]; // retorna 2
echo '<br>' . $lista[2]; // retorna 3.4
echo '<br>' . $lista[3]; // retorna 'texto'
var_dump($lista[4]); // caso a posição do array não exista, o valor sera retornado como nulo

// Acessando uma string através do colchetes
$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];// retorna e
echo '<br>' . $texto[2];// retorna s
echo '<br>' . $texto[5]; // retorna um caractere desconhecido por conta do encoding

// retorna o caractere na posição certa, por conta da função mb_subtr
echo '<br>' . mb_substr($texto,5, 1);
