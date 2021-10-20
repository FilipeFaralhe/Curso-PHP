<h1 class="title-panel">Modificador Final</h1>

<?php
abstract class Abstrata2 {
  abstract public function metodo1();

  final public function metodo2() {
    echo 'não vou mudar!<br>';
  }
}

class Classe2 extends Abstrata2 {
  public function metodo1() {
    echo 'Executando método 1<br>';
  }
  //Não é possível sobrescrever um método de outra classe que esteja com o modificador de acesso final
  /*public function metodo2() {
    echo 'Estendendo método 2<br>';
  }*/
}

$classe = new Classe2();
$classe->metodo1();
$classe->metodo2();

// Uma classe com o modificador de acesso final, não poderá ser herdada
final class Unica {
  public $attr = "Valor";
}

// Pode criar instâncias também
$unica = new Unica();
echo $unica->attr;

// Erro, pois uma classe não pode herdar de outra classe que esteja com o modificador de acesso final
/*class Duplicata extends Unica {

}*/