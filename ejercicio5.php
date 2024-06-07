<?php

$edad = intval(readline("ingrese su edad: "));
$confirmacion = "si";

$comprobacion_edad = ($edad >= 18) ? (($licencia = readline("tienes licencia? si o no: ")) == $confirmacion ? "puedes conducir" : "necesitas una licencia para conducir") : "no tienes la edad suficiente para manejar";

echo $comprobacion_edad;

?>