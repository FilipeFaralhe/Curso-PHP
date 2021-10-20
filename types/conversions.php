<h1 class="title-panel">Conversões</h1>

<?php
echo '<p>Int para Float:</p>';
echo is_int(PHP_INT_MAX); // is_int retorna true se o numero for inteiro e false caso não seja
echo '<br>';

// int para float
var_dump(PHP_INT_MAX + 1); // Passou dos maximo de números inteiros e virou float
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);// (float), (string), (int) e etc. Chamamos isso de casting, onde forçamos que dado seja de tal tipo

// float para int
echo '<p>Float para Int:</p>';
var_dump((int) 2.8); //houve um perda de dados nessa conversão, pois de 2.8 foi 2
echo '<br>';
var_dump(intval(2.8, 10)); // Valor na base 10
echo '<br>';
var_dump(intval('10101011100', 2));// Valor na base 2
echo '<br>';
var_dump((int) round(2.8));// Com o casting: Converte para int e retorna o número 3
echo '<br>';
var_dump(round(2.8));// Sem o casting: Retorna o numero 3, mas o tipo continua sendo float

// operações com string
echo '<p>Strings</p>';
var_dump(3 + "2"); // Retornara 5, pois o PHP não usa o sinal de "+" como forma de concatenação
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2); // Retorna 32, pois o PHP entende que é uma concatenação

// is_string retorna true se a s string for inteiro e false caso não seja
echo '<br>', is_string('3' . 2); // Retorna true por conta da concatenação

echo '<br>', is_string('3' + 2); // Retorna false por ser uma soma

var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5"); //converte para inteiro ignorando o .5, apenas pegando o 10
echo '<br>';
var_dump((float) "10.5"); // Convertendo string para float
echo '<br>';