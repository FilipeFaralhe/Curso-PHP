<h1 class="title-panel">Operadores Lógicos</h1>
<style>
  p#and {
    margin-top: 30px;
  }

  p {
    font-weight: bold;
  }
</style>
<?php
echo "<p>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not, operador unário
echo '<br>';

echo "<p id='and'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';

// Outro jeito de expressar a palavra chave 'E'
var_dump(true and true);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo '<br>';

echo "<p id='and'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);
echo '<br>';

// Outro jeito de expressar a palavra chave 'ou'
var_dump(true or true);
echo '<br>';
var_dump(true or false);
echo '<br>';
var_dump(false or true);
echo '<br>';
var_dump(false or false);
echo '<br>';

echo "<p id='and'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true); // Pode-se ter somente um true
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);
echo '<br>';

// Outro jeito de expressar a palavra chave 'OU Exclusivo'
var_dump(true != true); // Pode-se der somente um true
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != false);
echo '<br>';

echo "<p id='and'>Exemplo</p><hr>";
$idade = 60;
$sexo = 'F';

$pagouPrevidencia = true;
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$atingiuCriterio = ($criterioHomem || $criterioMulher);
$podeAposentar = $pagouPrevidencia && $atingiuCriterio;


if($podeAposentar) {
  echo "Pode aposentar -> $sexo";
} else {
  echo 'Vai ter que trabalhar mais um pouco';
}