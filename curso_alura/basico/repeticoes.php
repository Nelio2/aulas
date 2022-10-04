<?php 

// While 

$contador = 0;

while ($contador <= 8) {
	
	
	$contador = $contador +1 ;
	$soma = $contador * 2;
	echo "$contador". " x "." 2 "." = ".$soma. "<br>";
}

echo "<hr>";

for ($i=1; $i < 100; $i++) {

	if ($i % 2 == 0) {
	
   echo "$i"."<br>";
	
	}

}
