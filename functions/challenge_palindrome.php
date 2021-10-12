<h1 class="title-panel">Desafio Palíndromo</h1>

<?php

// Com array reverso
function isPalindrome($palavra) {
  $palavra = strtolower($palavra);
  $arrayPalavra = str_split($palavra);
  $palavraReversa = array_reverse($arrayPalavra);
  $palavraReversaString = join("", $palavraReversa);

  if($palavra === $palavraReversaString){
    return "True";
  } else {
    return "False";
  }
}

// com for
function isPalindromeFor($palavra) {
  $ultimoIndice = strlen($palavra) - 1;
  $palavra = strtolower($palavra);
  for($count = 0; $count <= $ultimoIndice; $count++) {
    if($palavra[$count] !== $palavra[$ultimoIndice - $count]) {
      return 'False';
    }
  }
  return 'True';
}

// Com string reversa
function isPalindromeWhitStringReverse($palavra) {
  $palavra = strtolower($palavra);
  return $palavra === strrev($palavra) ? 'True' : 'False';
}

echo isPalindrome("Arara");
echo '<br>';
echo isPalindromeFor("Arara");
echo '<br>';
echo isPalindromeWhitStringReverse("Arara");