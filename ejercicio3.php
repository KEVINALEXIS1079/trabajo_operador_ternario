<?php 
$largo = readline("ingrese el largo de su finca: ");
$ancho = readline("ingrese el ancho de su finca: ");
$area = $ancho * $largo;
$resultado = ($area >= 1000)? "es adecuado para cultivos extensos":"es mas apropiado para cultivos como jardin o huertas";
echo $resultado;