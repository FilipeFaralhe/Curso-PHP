<?php namespace Outro\Nome; ?>

<h1 class="title-panel">Use/As</h1>

<?php
echo __NAMESPACE__ . '<br>';

include ('use_as_file.php');

function soma($a, $b) {
    return $a . $b;
}

class Classe {
    public $var;

	function func() {
		echo __NAMESPACE__ . '->'
			. __CLASS__ . '->'
			. __METHOD__ . '<br>';
	}
}

echo \Nome\Bem\Grande\constante . '<br>'; //imprime o valor da constante de outro arquivo

use const Nome\Bem\Grande\constante; //permita que eu use a constante de outro arquivo
echo constante . '<br>';

use Nome\Bem\Grande as ctx;

echo soma(1,2) . '<br>'; // usa a soma do próprio arquivo

echo ctx\soma(2, 5) . '<br>'; // usa o soma do use_as_file

//use function Nome\Bem\Grande\soma; Erro!
use function Nome\Bem\Grande\soma as somaReal; //como a função soma da existe, é necessário apelidar a função
echo somaReal(2, 6) . '<br>';

$a = new Classe();
$a->func();

//$b = new Nome\Bem\Grande\Classe();
$b = new ctx\Classe();
$b->func();

use \Nome\Bem\Grande\Classe as D;
$c = new D();
$c->func();