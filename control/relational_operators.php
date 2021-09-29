<h1 class="title-panel">Operadores Relacionais</h1>

<style>
  p#spaceship {
    margin-top: 30px;
  }
</style>

<?php
var_dump(1 == 1);// true
echo '1 <br>';
var_dump(1 > 1); // false
echo '2 <br>';
var_dump(1 >= 1);// true
echo '3 <br>';
var_dump( 4 <= 1);// false
echo '4 <br>';
var_dump( 4 < 1);// false
echo '5 <br>';
var_dump( 1 != 1);// false

echo '6 <br>';
var_dump(1 == '1'); // true
echo '7 <br>';
var_dump(1 === '1'); //false, tres iguais compraram valores estritamente iguais, sendo em valores até em tipos
echo '8 <br>';
var_dump(1 != '1'); //false, resulta a false pq eles não são diferentes em valores
echo '9 <br>';
var_dump(1 !== '1'); //true, retorna true pois esta comparando se eles são estritamente diferentes
echo '10 <br>';

echo '<br>';

echo "<p>Relacionais no If/Else</p><hr>";
$idade = 65;
if($idade < 18) {
  echo "Menor de idade = $idade anos";
} else if($idade < 65) {
  echo "Maior de idade, Adulto = $idade anos";
} else {
  echo "Maior de idade, Idoso = $idade anos";
}

echo "<p id='spaceship'>Spaceship</p><hr>";
var_dump(5 <=> 3); // retorna 1 caso o operando da esquerda seja maior do que o da direita
var_dump(50 <=> 50); // retorna 0 caso os dois operandos sejam iguais
var_dump(5 <=> 50); // retorna -1 caso o operando da esquerda seja menor do que o da direita