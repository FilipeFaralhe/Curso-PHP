<h1 class="title-panel">Array Constantes</h1>

<?php
/*
  Diferente do javaScript, quando declaramos que um array é
  constanta estamos dizendo que não poderá modificar a variável e os itens desse array
*/

const FRUTAS = ['laranja', 'abacaxi'];
//FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = array("Fiat" => "Uno", "Ford" => "Fiesta");
// CARROS["BMW"] = '325i'; erro pois o array é constante
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[] = 'Rio de Janeiro'; erro pois o array é constante
echo '<br>' . CIDADES[0];