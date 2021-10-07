<h1 class="title-panel">While/Do While</h1>

<?php

const VALOR_LIMITE = 5;

// WHILE
$cont = 0;
while ($cont < VALOR_LIMITE) {
  echo "while $cont <br>";
  $cont++;
}

echo "<br>";

// DO WHILE
$contDo = 0;
do {
  echo "do while $contDo <br>";
  $contDo++;
} while ($contDo < VALOR_LIMITE);

echo "<br>";

// Podemos utilizar o break no while
$contBreak = 0;
while(true) {
  echo "while(true) $contBreak <br>";
  $contBreak++;
  if ( $contBreak >= VALOR_LIMITE ) {
    break;
  }
}