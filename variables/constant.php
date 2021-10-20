<h1 class="title-panel">Constante</h1>

<?php
/*
 Recomendável criar constantes com nomes maiúsculos, separados por underline,
 como no exemplo abaixo:
*/
define('TAXA_DE_JUROS', 5.9);
echo '<br>' . TAXA_DE_JUROS . '!';
// TAXA_DE_JUROS = 2; Erro! pois é um constante e o valor não pode ser modificado

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

/*
 Não conseguimos setar um valor para uma constante recebendo uma variável pela palavra chave 'const'
 então utilizamos o define nessas situações;
*/

$valorVariavel = 2.8;
define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel; Erro! palavra chave const não suporte isso
echo '<br>' . NOVISSIMA_TAXA;

// ALGUMAS CONSTANTES
echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha: ' . __LINE__; // constante que começa com underline + underline
echo '<br> Qual arquivo eu estou: ' . __FILE__; // Mostra em que arquivo você está
echo '<br> Qual diretório eu estou: ' . __DIR__; // Mostra em qual diretório você está