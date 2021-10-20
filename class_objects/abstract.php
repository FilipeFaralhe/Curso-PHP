<h1 class="title-panel">Classe Abstrata</h1>

<?php
// Não pode criar instâncias de classes abstratas
abstract class Abstrata {
  abstract public function metodo1();
  abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
  public function metodo1() {
    echo "Executando método 1<br>";
  }

  abstract public function metodo3();
}

/*
  Se a classe concreta estiver recebendo herança de uma outa classe abstrata,
  é necessário que a classe concreta instancie todos os métodos daquela classe abstrata
*/
class Concreta extends FilhaAbstrata {
  public function metodo1() {
    echo "Sobrescrevendo o método 1<br>";
    parent::metodo1();
  }
  protected function metodo2($parametro) {
    echo "Executando método 2, com parametro $parametro<br>";
  }
  public function metodo3() {
    echo "Executando método 3<br>";
    $this->metodo2('interno');
  }
}

$concreta1 = new Concreta();
$concreta1->metodo1();
// $concreta1->metodo2('externo'); // não é possível executar pois e método é protegido
$concreta1->metodo3();

echo "<br>";
var_dump($concreta1);

echo "<br>";
var_dump($concreta1 instanceof Concreta);
var_dump($concreta1 instanceof FilhaAbstrata);
var_dump($concreta1 instanceof Abstrata);