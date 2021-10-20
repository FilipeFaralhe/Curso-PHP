<h1 class="title-panel">Polimorfismo</h1>

<?php
abstract class Comida {
  public $peso;
}

class Arroz extends Comida {

}

class ArrozAmarelo extends Arroz {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa3 {
  public $peso;

  function __construct($peso) {
    $this->peso = $peso;
  }

  /*
    Ao falar que a função ira suportar somente o tipo Arroz, o parâmetro terá
    que ser objetos da classe Arroz ou subclasses de Arroz
  */
  public function comer(Arroz $comida){
    return $this->peso += $comida->peso;
  }

  public function comer1(Comida $comida){
    return $this->peso += $comida->peso;
  }
}

$c1 = new Arroz();
$c1->peso = 0.50;

$c2 = new ArrozAmarelo();
$c2->peso = 0.60;

$c3 = new Feijao();
$c3->peso = 0.40;

$p = new Pessoa3(50);
echo $p->comer($c1) . '<br>';
echo $p->comer($c2) . '<br>';
// echo $p->comer($c3) . '<br>'; não come, pois a parâmetro e diferente de arroz

echo '<hr>';

//Polimorfismo
$c4 = new Arroz();
$c4->peso = 0.50;

$c5 = new ArrozAmarelo();
$c5->peso = 0.60;

$c6 = new Feijao();
$c6->peso = 0.40;

// Come todos os tipos de comida pois o parâmetro passado é da classe comida
echo $p->comer1($c4) . '<br>';
echo $p->comer1($c5) . '<br>';
echo $p->comer1($c6) . '<br>';

