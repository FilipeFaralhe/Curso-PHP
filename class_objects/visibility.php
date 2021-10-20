<h1 class="title-panel">Visibilidade</h1>

<?php
class A {
  public $publico = 'Público';
  protected $protegido = 'Protegido';
  private $privado = 'Privado';

  public function mostrarA() {
    $this->naoMostrar(); //Permitido
    echo "class a) Publico = {$this->publico}<br>";
    echo "class a) Protegido = {$this->protegido}<br>";
    echo "class a) Privado = {$this->privado}<br>";
  }

  //função permitida só nas classes que herdarão desta classe
  protected function vaiPorHeranca() {
    echo 'função permitida em herança<br>';
  }

  //Pode ser chamada somente dentro da função
  private function naoMostrar(){
    echo 'Não vou imprimir<br>';
  }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar; Erro, tentando acessar um membro privado fora da classe
echo '<br>';

// A classe b pode acessar tanto os dados públicos e protegidos, pois ela está herdando da classe A
class B extends A {
  public function mostrarB() {
    parent::vaiPorHeranca();
    echo "class b) Publico = {$this->publico}<br>";
    echo "class b) Protegido = {$this->protegido}<br>";
    /*
      Erro, pois só pode chamar o atributo privado dentro da própria classe
      echo "class b) Privado = {$this->privado}<br>";
    */
  }
}

$b = new B();
$b->mostrarB();
echo '<br>';
$b->mostrarA();
// $b->vaiPorHeranca(); Erro! Pois só poderá ser executada dentro da classe herdada
