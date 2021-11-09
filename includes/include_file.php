<?php
echo "Carregando arquivo include_file<br>";

$variavel = 'Estou Definda';

if(!function_exists('somaInclude')) {
	function somaInclude($a, $b) {
			return $a + $b;
	}
}


