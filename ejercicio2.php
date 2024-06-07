<?php
$articulos = readline("ingrese la cantidad de articulos comprados: ");
$valor = readline("ingrese el valor unitario de los articulos: ");


$total = $valor * $articulos;


$descuento = $total * 0.1;

$resultado = ($articulos >= 10)?"tiene descuento del 10% y el total es: ".$total - $descuento:"el total es de:  ".$total;

echo $resultado;