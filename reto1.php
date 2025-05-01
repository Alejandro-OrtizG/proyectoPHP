<?php

$ageChildren = array(4,6,10);

foreach($ageChildren as $value){
    if($value < 5){
      echo "El niño de $value años tiene que almacenar sus juguetes en la bodega inferior\n";
    } elseif($value >= 5 && $value < 7){
      echo "El niño de $value años tiene que almacenar sus juguetes en la bodega media\n";
    } elseif($value >= 7){
      echo "El niño de $value años tiene que almacenar sus juguetes en la bodega alta\n";
    } else{
      echo "El niño no tiene registro de su edad, por lo tanto tiene que almacenar sus juguetes en la bodega de al lado\n";
    }
}

// Dibujo de arbolito de navidad

$chosenNumber = (int)readline("Ingrese un número entre 1 y 10: ");

for($i = 0; $i < $chosenNumber + 1; $i++){
    for($j = 0; $j < $i; $j++){
        echo "🍁";
    }
    echo "\n";
}
