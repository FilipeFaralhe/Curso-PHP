<h1 class="title-panel">Mapa Array</h1>

<?php
//Criando array com map (chave e valor)
$dados = array(
  "idade" => 25,
  "cor" => "verde",
  "peso" => 49.8
);

print_r($dados);
echo "<br> $dados[idade]";
echo "<br> $dados[cor]";
echo "<br> $dados[peso]";

/*
  Não recomendo misturar índices com map(chave e valor),
  pois pode gerar uma confusão nas buscas dos dados
*/
$lista = array(
  "a",
  "cinco" => "b",
  "c",
  8 => "d",
  "e",
  6 => "f",
  "g",
  8 => "h"
);

echo '<br>';
print_r($lista);

// adicionando valores a array
$lista[] = "i";// vai adicionar i na índice 11
echo '<br>';
print_r($lista);

$lista['vinte'] = "j";// cria uma chave com o nome 'vinte' e armazena a string 'j'
echo '<br>';
print_r($lista);