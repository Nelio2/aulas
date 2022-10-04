<?php 

$idade = 15;
$nrdepessoas = 2;

echo "Voce so pode entrar se tiver a partir de 18 anos ou". "<br>";
echo "a partir de 16anos acompanhado". "<br>";

if ($idade >= 18) {

	echo "<br>"."<h2>Voce tem $idade pode entrar</h2>";

} else if($idade >= 16 && $nrdepessoas > 1) {

		echo "<br>"."Voce tem $idade anos, e esta acompanhado(a), entao pode entrar";
	 } else{

	echo "<br>"."Voce tem $idade, nao pode entrar";
	}


echo "<br>";

