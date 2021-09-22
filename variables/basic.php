<h1 class="title-panel">Variáveis</h1>

<?php
// Armazena na variáveis o número 13
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
// Retorna true se aa variável estiver setada e false caso não esteja
echo isset($soma);
echo '<br>';

unset($soma);
echo isset($soma);// retorna false, pois houve um unset na variável
var_dump($soma); // falar que a variável soma é nula, pois ela esta como unset

/*
  Aqui vemos um exemplo de linguagem fracamente tipada, pois não defini nenhum tipo para
  a variável, podendo então ser int e embaixo podemos mudar o tipo dela
*/
$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora eu sou uma string!";
echo '<br>' . $variavel;

// Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VariaveisELegal = 'valido'; // Recomendado
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // Evitar!
// $6var = 'invalida';
// $%var6 = 'invalida';
// $var6% = 'invalida';

// Variáveis pre-definidas
echo '<br>';
// $_GET
// $_POST
var_dump($_SERVER["HTTP_HOST"]);