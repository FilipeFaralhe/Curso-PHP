<h1 class="title-panel">Traits #01</h1>

<?php

/*
  Traços são um mecanismo para reutilizar o código em uma linguagem de herança simples,
  como php. Um traço tenta reduzir algumas das limitações da herança simples, permitindo
  que o desenvolvedor reutilize uma série de métodos em classes independentes. A semântica
  entre classes e traços reduz a complexidade e evita os problemas típicos de herança
  múltipla e Mixins.
*/
trait validacao {
  public $a = "Valor A";
  public function validarString($str) {
    return isset($str) && $str !== '';
  }
}

trait validacaoMelhor {
  public $b = "Valor B";
  private $c = "Valor C (privado)";
  public function validarStringMelhor($str) {
    return isset($str) && trim($str);
  }
}

class User {
  use validacao, validacaoMelhor;

  public function imprimirValorPrivado()  {
    return '<br>' . $this->c;
  }
}


//var_dump(validacao->validarString(''))
// não é possível acessar métodos e atributos diretamente de um trait,
// é necessário a utilização de classes

$user = new User();
var_dump($user->validarString('   '));
echo '<br>';
var_dump($user->validarStringMelhor('   '));
echo '<br>';
echo $user->a . ' : ' . $user->b;
echo $user->imprimirValorPrivado();
