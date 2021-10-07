<h1 class="title-panel">For</h1>

<?php
for($cont = 1; $cont <= 5; $cont++) {
  echo "$cont<br>";
}

echo '<hr>';

//não é necessário informar todos os parâmetros, como no exemplo abaixo:
for(; $cont <= 10; $cont++) {
  echo "$cont<br>";
}

echo '<hr>';

// caso não informe um modificar em algum lugar, poderá causar um laço infinito.
for(; $cont <= 15 ;) {
  echo "$cont <br>";
  $cont++; // não recomendado
}

$semanas = [
  'Domingo',
  'Segunda',
  'Terça',
  'Quarta',
  'Quinta',
  'Sexta',
  'Sábado'
];

echo '<hr>';
print_r($semanas);
echo '<br>';

for($i = 0; $i < count($semanas); $i++){
  echo '<br>' . $semanas[$i];
}

echo '<hr>';

$matrix = [
 ['a', 'e', 'i', 'o', 'u'],
 ['b', 'c', 'd']
];


for($i = 0; $i < count($matrix); $i++){
  print_r($matrix[$i]);
  for ($j = 0; $j < count($matrix[$i]); $j++){
    echo $matrix[$i][$j];
  }
  echo '<br>';
}