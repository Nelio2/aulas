<?php 

// IMC = PESO / ALTURA AO CUBO

$peso = 60;
$altura = 1.63;
$normal = 18.5;

$imc = $peso / $altura **2;

echo "Seu IMC E $imc"."<br>";

if ($imc < $normal) {

	echo "IMC BAIXO "."<br>";
} elseif ($imc < 25) {
	
	echo "IMC DENTRO "."<br>";
} else {

	echo "IMC ACIMA";
}