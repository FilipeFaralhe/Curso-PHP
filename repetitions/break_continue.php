<h1 class="title-panel">Break e Continue</h1>

<?php

//Exemplo 1
$cont = 10;
for (;;) {
  echo "$cont <br>";
  $cont++;
  if($cont > 16) {
    break;
  }
}
echo "Fim <br>";

$cont1 = 10;
//Exemplo 2
for (;;) {
  $cont1++;

  if ($cont1 % 2 === 1) {
    continue;
  }
  echo "$cont1 <br>";

  if ($cont1 >= 20) {
    break;
  }
}

echo "Fim <br>";

//Exemplo 3
foreach (array(1, 2, 3, 4, 5, 6) as $valor) {
  if ($valor === 5) {
    break;
  }
  if ($valor % 2 === 0) {
    continue;
  }
  echo "$valor <br>";
}

echo "Fim <br>";
