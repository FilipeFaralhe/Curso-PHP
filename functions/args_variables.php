<h1 class="title-panel">Argumentos Variáveis</h1>

<?php
// parâmetros fixos
function soma($a, $b) {
  return $a + $b;
}

/*
 caso eu passe mais argumentos do que a função tem, ele pega
  somente os primeiros argumentos e ignora o restante. Como no exemplo abaixo
*/
echo soma(2, 4, 4, 6) . '<br>';

// ARGUMENTOS VARIÁVEIS
/*
   Se vc quiser criar uma função onde o maximo de parâmetros e definido para quantidade de argumentos
   é necessário utilizar o spreed.

   como funciona:
   -> todos os parâmetros passados sera coloca dentro de um array, onde conseguirá comandar através dele
*/
function somaCompleta(...$numeros) {
  print_r($numeros); // spreed transforma os parâmetros em array
  $soma = 0;
  foreach ($numeros as $num) {
    $soma += $num;
  }
  return $soma;
}

echo somaCompleta(3, 4, 5, 6, 7) . '<br>';

// SPREAD COM ARRAY
function numeros(...$num) {
  print_r($num);
}

$array = [6, 7, 8];
/*
  spread faz com que substitua o array pelo conteúdo,
  ao invés de mandar o array inteiro, era mandar 6, 7, 8
*/
echo '<br>' . numeros(...$array);

/*
 ATENÇÃO
 ->  Cuidado para não passar um array completo em uma função que tem spread,
    pois quando isso acontece, ira criar uma array dentro do outro, como no exemplo abaixo
*/
function teste(...$num) {
  print_r($num);
}

$array = [6, 7, 8];
/*
  spread faz com que substitua o array pelo conteúdo,
  ao invés de mandar o array inteiro, era mandar 6, 7, 8
*/
echo '<br>' . teste($array);

// PARÂMETROS FIXOS COM PARÂMETROS VARIÁVEIS

function membros($titular, ...$dependentes) {
  echo "Titular: $titular. <br>";
  if($dependentes) {
    foreach ($dependentes as $dep) {
      echo "Dependente: $dep. <br>";
    }
  }
}

echo membros("Filipe", "Paulo", "Maria", "João");
echo '<br>';
echo membros("Carlos");
echo '<br>';
echo membros("Carlos", "Carla");