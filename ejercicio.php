<?php
// Horario en formato 12 horas
$horario = date("g:i:s a");

echo "\n";
echo "La hora es: $horario";

// Convertir a formato 24 horas
$horario24h = date("H:i:s", strtotime($horario));
echo "\n";
echo "La hora es: $horario24h";

?>