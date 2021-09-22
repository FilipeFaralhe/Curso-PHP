<h1 class="title-panel">Atribuição</h1>

<?php
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 1;
echo '<br>' . $numero;
$numero = $numero + 1.5; // mudou de valor e tipo
echo '<br>' . $numero;

// Operador Unário -> incremento / Decremento

// INCREMENTO
$numeroIncremento = 5;
// Imprime a varável e depois incrementa
echo '<br>' . $numeroIncremento++;
// Incremente e depois imprime a variável
echo '<br>' . ++$numeroIncremento;

// DECREMENTO
$numeroDecremento = 5;
// Imprime a varável e depois decrementa
echo '<br>' . $numeroDecremento--;
// decrementa e depois imprime a variável
echo '<br>' . --$numeroDecremento;

// ALGUNS OPERADORES DE ATRIBUIÇÃO
$numeroAtr = 10;

$numeroAtr += 3; // $numeroAtr = $numeroAtr + 3
$numeroAtr -= 3; // $numeroAtr = $numeroAtr - 3
$numeroAtr *= 3; // $numeroAtr = $numeroAtr * 3
$numeroAtr /= 3; // $numeroAtr = $numeroAtr / 3
$numeroAtr %= 3; // $numeroAtr = $numeroAtr % 3
$numeroAtr **= 3; // $numeroAtr = $numeroAtr ** 3
$numeroAtr .= 3; // concatena o numero 3

// ATRIBUIÇÃO STRING
$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .=' de verdade';
echo '<br>' . $texto;

/*$variavelInexistente = 'Valor existente';*/
/*echo '<br>' .  $variavelInexistente;*/
$valor = $variavelInexistente ??'valor default'; // Se a variável não existir, imprime 'valor default'
echo '<br>' . $valor;
