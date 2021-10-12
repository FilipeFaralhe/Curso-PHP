<h1 class="title-panel">Argumentos e Retorno</h1>

<?php
function obterMensagem() {
  return 'Seja bem vindo(a)!';
}


obterMensagem();
$mensagem = obterMensagem();
echo $mensagem;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem()); // mostra o que a função está retornando

echo '<br>';

function obterMensagemComNome($nome) {
  return "Seja bem vindo(a), $nome!";
}

$mensagemComNome = obterMensagemComNome('Filipe');
echo $mensagemComNome;

echo '<br>';

function soma($valor1, $valor2) {
  return $valor1 + $valor2;
}

$valorX = 4;
$valorY = 5;

echo "<br>" . soma(2, 10);
echo "<br>" . soma($valorX, $valorY);

function trocaValor($a, $novoValor) {
  $a = $novoValor;
  return $a;
}

$variavel = 1;
//passa o argumento como valor, então a variável global não vai ser alterada
echo "<br>" . trocaValor($variavel, 10);
echo "<br>" . $variavel;

// Passando argumentos por referencia
function trocaValorDeVerdade(&$a, $novoValor) {
  $a = $novoValor;
  return $a;
}

echo "<br>" . trocaValorDeVerdade($variavel, 10);
echo "<br>" . $variavel;