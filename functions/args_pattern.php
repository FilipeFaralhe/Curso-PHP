<h1 class="title-panel">Argumentos Padrões</h1>

<?php
//Exemplo 01
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
  return "Bem vindo, $nome $sobrenome!<br>";
}

// caso não passe nenhum dos dois parâmetros, a função ira utilizar os argumentos padrões
echo saudacao();
echo saudacao(null);
echo saudacao(null, null);
echo saudacao('Filipe');

//Exemplo 02
function anotarPedido($comida, $bebida = 'Água') {
  echo "Para comer: $comida <br>";
  echo "Para beber: $bebida <br>";
}

anotarPedido('Pão com queijo');
anotarPedido('Pão com queijo', 'coca');