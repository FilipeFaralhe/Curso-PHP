<?php
    namespace contexto;
?>

<div class="title-panel">Exemplo Básico</div>

<?php
/*
   Um namespace serve para fornecer uma maneira de manter um conjunto de nomes separado de outro. Os nomes de classe declarados
   em um namespace não entram em conflito com os mesmos nomes de classe declarados em outro.
*/

echo __NAMESPACE__ . '<br>';
const CONSTANTE1 = 123;
define('contexto\CONSTANTE2', 234); // é necessário passar o caminho do namespace para criar uma constante com define
define(__NAMESPACE__.'\CONSTANTE3', 555); // é necessário passar o caminho do namespace para criar uma constante com define

echo CONSTANTE1 . '<br>';
echo CONSTANTE2 . '<br>';
echo CONSTANTE3 . '<br>';
echo constant(__NAMESPACE__ . '\CONSTANTE3') . '<br>';

function somaNamespace($a, $b) {
    return $a + $b;
}

echo \contexto\somaNamespace(1,2) . '<br>';
echo somaNamespace(1, 4) . '<br>'; // como esta dentro do namespace, ela vai funcionar, mas caso estejá fora do namesapce não será possível achar

function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em  '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>'; // cai na função strpos desde arquivo
echo \strpos('Texto genérico para busca', 'busca') . '<br>'; // para pegar a função default do php, é necessário incluir o sinal da raiz
echo \App\constante . '<br>';