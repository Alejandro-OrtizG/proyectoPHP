<?php

$listWords = array("casa", "perro", "gato", "ratón", "elefante", "jirafa", "león", "tigre", "pájaro", "pez");

for($i = 0; $i < count($listWords); $i++){
  echo "la palabra a adivinar es: " . str_shuffle($listWords[$i]) . "\n";
  $word = readline("Adivina la palabra: ");
  if($word == $listWords[$i]){
    echo "¡Correcto! La palabra es: " . $listWords[$i] . "\n";
  } else {
    echo "Incorrecto. La palabra era: " . $listWords[$i] . "\n";
  }
}

?>