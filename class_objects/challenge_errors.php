<h1 class="title-panel">Desafio Erros</h1>

<?php
interface Template {
   function metodo1(): string;
   function metodo2($parametro): string;
}

abstract class  ClasseAbstrata implements Template {

  public function metodo1(): string {
    return "Executando método 1<br>";
  }

  public function metodo2($parametro): string {
    return "Executando método 2 com o parâmetro $parametro<br>";
  }

  public function metodo3() {
    return "Estou Funcionando<br>";
  }
}

class Classe extends ClasseAbstrata {
  public function __construct() {

  }
}

$exemplo = new Classe();
echo $exemplo->metodo3();
echo $exemplo->metodo2('externo');