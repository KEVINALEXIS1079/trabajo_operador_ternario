<?php
$mes = readline("ingrese de forma numerica el mes en que se encuentra: ");

$meses = ["1"=>"enero","2"=>"febrero","3"=>"marzo","4"=>"abril","5"=>"mayo", "6"=>"junio","7"=>"julio","8"=>"agosto","9"=>"septiembre","10"=>"octubre","11"=>"noviembre","12"=>"diciembre"];
$cultivo = (($mes < 4)|($mes > 11))?"se puede hacer una siembra directa ya que el mes es ".$meses[$mes]:"se debe usar la siembra almacigo ya que el mes es ".$meses[$mes];
echo $cultivo;