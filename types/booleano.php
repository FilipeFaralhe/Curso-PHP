<h1 class="title-panel">Tipo Booleano</h1>

<?php
echo TRUE; // converte para 1 no browser, pois ele só reconhece valores textuais
echo '<br>';
echo FALSE; // não é convertido para nada no navegar, nem para 0

echo '<br>' . var_dump(true); // Boolean
echo '<br>' . var_dump(false); // Boolean
echo '<br>' . var_dump('false'); // String

echo '<br>' . is_bool(false); // detecta se o valor passado como argumento é booleano

// fazer as regras de conversões

// qualquer número diferente de 0, é true
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((float) 0); // forçando 0 a ser do tipo float
echo '<br>' . var_dump((bool) 20); // True
echo '<br>' . var_dump((bool) -1); // True
echo '<br>' . var_dump((bool) 0.0); // False
echo '<br>' . var_dump((bool) 0.000001); // True
echo '<br>' . var_dump((bool) ""); // False
echo '<br>' . var_dump((bool) "0"); // False
echo '<br>' . var_dump((bool) " "); // Todo resto é true
echo '<br>' . var_dump((bool) "00"); // Todo reso é true

echo '<br>' . var_dump(!true); // retorna false pois tem um sinal de negação e a negação de true é false
