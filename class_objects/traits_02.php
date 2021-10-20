<h1 class="title-panel">Traits #02</h1>

<?php

/*Resolvendo conflito de métodos entre traits*/

trait validacao {
  public function validarString($str) {
    return isset($str) && $str !== '';
  }
}

trait validacaoMelhor {
  public function validarString($str) {
    return isset($str) && trim($str);
  }
}

class User2 {
  use validacao, validacaoMelhor {
    //Está falando para pegar o método validarString da trait de validacaoMelhor ao invés do método da trait de validacao
    validacaoMelhor::validarString insteadof validacao; // resolve o problema!

    //muda o nome de um dos métodos, mas somente nesta classe
    validacao::validarString as validacaoSimples;
  }
}

$usuario = new User2();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));

