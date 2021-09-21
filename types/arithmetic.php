<h1 class="title-panel">Operações Aritméticas</h1>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // Corta o valor float da divisão, transformando 1.75 em 1
echo round(7 / 4), '<br>'; // Arredondo o valor da divisão para cima ou para baixo
echo 7 % 4, '<br>'; // Resto da divisão
//echo 7 / 0, '<br>'; Erro!
//echo intdiv(7, 0); Erro! Pois é uma divisão por zero
echo 4 ** 2, '<br>'; // 4 elevado a 2 = 16

/*
  Precedência de operadores:
  () => ** => / * % => + -
*/

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>'; // 14
echo (2 + 3) * 4, '<br>'; // 20
echo 2 + 3 * 4 ** 2, '<br>'; // 34
echo ((2 + 3) * 4) ** 2, '<br>'; // 400