<h1 class="title-panel">Array Multidimensional</h1>

<?php
$dados = [
  [
    "nome" => "Filipe",
    "idade" => 25,
    "naturalidade" => "São Paulo"
  ],
  [
    "nome" => "Maria",
    "idade" => 30,
    "naturalidade" => "Bahia"
  ]
];

print_r($dados);
echo '<br>' . $dados[0]['nome'];
echo '<br>' . $dados[1]['nome'];

// adicionar o array sem sobrescrever o outro
$dados[] = [
  "nome" => "Florinda",
  "idade" => 30,
  "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['nome'];

// Adicionar chave valor dentro do array
$dados[2]['vizinhos'] = "chaves";
echo '<br>';
print_r($dados);

/*
  Excluiu um dado do array, apos apagar o array
  ele não organiza os indices então a posições ocupados iram continuar a ser 0 e 2
*/
unset($dados[1]);
echo '<br>';
print_r($dados);