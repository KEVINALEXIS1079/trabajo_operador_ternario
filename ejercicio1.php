<?php

$valor = 100;

$camisa = readline("ingrese un numero de camisas que va a comprar:");
$total = $valor * $camisa;
$descuento1 = $total * 0.2;
$descuento2 = $total * 0.1;
$descuento = ($camisa >= 3)?"tiene descuento del 20% y el total es: ".$total - $descuento1:"tiene descuento del 10% y el total es: ".$total - $descuento2;
echo $descuento;