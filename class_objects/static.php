<h1 class="title-panel">Membros Estáticos</h1>

<?php
// Membros estáticos pertencem a classe, ou sendo, não ira constar nas instâncias
class A {
  public $naoStatic = 'Variável de instância';
  public static $static = 'Variável de classe (estática)';

  public function mostrarA() {
    echo "Não estático: {$this->naoStatic}<br>";
    // Acessando um membro estático,
    // echo "Estático: {$this->static}<br>"; // membros estáticos não são acessados com $this->
    // tentativa 2
    // echo "Estático: {self::$static}"; // concatenação não permitida
    // tentativa 3
    echo "Estático: " . self::$static . "<br>"; // jeito certo de chamar membros estáticos
     // jeito certo de chamar membros estáticos
  }

  public static function mostrarStaticA() {
    //echo "Não estático: {$this->naoStatic}<br>"; não é possível acessar o this em uma função estática
    echo "Estático: " . self::$static . "<br>";
  }
}

$classe = new A();
$classe->mostrarA();
A::mostrarStaticA(); // Forma certa de acessar membros estáticos, sempre chamar pela classe e não pela instância
echo A::$static, '<br>';